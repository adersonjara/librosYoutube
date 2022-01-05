<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('cod_categoria', 'DESC')->paginate(10);
        return view('categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
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
            'titulo' => 'required|min:3|max:100|unique:categoria',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria registrada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show',['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:100|unique:categoria,titulo,'.$categoria->cod_categoria.',cod_categoria',
        ]);

        $categoria->fill($request->only([
            'titulo',
        ]));

        if ($categoria->isClean()) {
            return back()->with('statuswarning', 'Debe realizar al menos un cambio, para actualizar');
        }

        $categoria->update($request->all());

        return back()->with('status', 'Categoria Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        if ($categoria)  
        {
            if ($categoria->delete()){

            DB::statement('ALTER TABLE categoria AUTO_INCREMENT = '.(count(Categoria::all())+1).';');

            return back()->with('status', 'Categoria Eliminada Correctamente');
            
            }   
        }
        
    }
}
