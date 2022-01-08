<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Sexo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::orderBy('cod_autor', 'DESC')->paginate(10);
        return view('autores.index', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos = Sexo::all();
        return view('autores.create', ['sexos' => $sexos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|min:3|max:100',
            'apellidos' => 'required|min:3|max:100',
            'cod_sexo' => 'required',
        ]);

        $request['nombrecompleto'] = $request->nombres.' '.$request->apellidos;
        //dd($request->all());
        Autor::create($request->all());

        return redirect()->route('autores.index')
            ->with('success', 'Autor registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autore)
    {
        return view('autores.show',['autor' => $autore]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autore)
    {
        //dd($autore);
        $sexos = Sexo::all();
        return view('autores.edit', ['autor' => $autore,'sexos' => $sexos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autore)
    {
        $request->validate([
            'nombres' => 'required|min:3|max:100',
            'apellidos' => 'required|min:3|max:100',
            'cod_sexo' => 'required',
        ]);

        $autore->fill($request->only([
            'nombres',
            'apellidos',
            'sexo',
            'cod_sexo'
        ]));

        if ($autore->isClean()) {
            return back()->with('statuswarning', 'Debe realizar al menos un cambio, para actualizar');
        }

        $autore->update($request->all());

        return back()->with('status', 'Autor Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autore)
    {
        if ($autore)  
        {
            if ($autore->delete()){

            DB::statement('ALTER TABLE autor AUTO_INCREMENT = '.(count(Autor::all())+1).';');

            return back()->with('status', 'Autor Eliminado Correctamente');
            
            }   
        }
    }
}
