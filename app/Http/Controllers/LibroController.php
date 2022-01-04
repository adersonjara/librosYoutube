<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::orderBy('cod_libro', 'DESC')->paginate(10);
        return view('libros.index', ['libros' => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idiomas = ['Español','Ingles','Chino'];
        return view('libros.create', ['idiomas' => $idiomas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request->fecha_publicacion);
        $request->validate([
            'titulo' => 'required|min:3|max:100|unique:libro',
            'idioma' => 'required',
            'descripcion' => 'required|min:3|max:200',
            'fecha_publicacion' => 'required|date'
        ]);

        //dd($request->all());

        Libro::create($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libros.show',['libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $idiomas = ['Español','Ingles','Chino'];
        //dd($libro);
        return view('libros.edit', ['libro' => $libro,'idiomas' => $idiomas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:100|unique:libro,titulo,'.$libro->cod_libro.',cod_libro',
            'idioma' => 'required',
            'descripcion' => 'required|max:200|',
            'fecha_publicacion' => 'required|date'
        ]);

        $libro->fill($request->only([
            'titulo',
            'idioma',
            'descripcion',
            'fecha_publicacion'
        ]));

        if ($libro->isClean()) {
            return back()->with('statuswarning', 'Debe realizar al menos un cambio, para actualizar');
        }

        $libro->update($request->all());

        return back()->with('status', 'Libro Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();

        return back()->with('status', 'Libro Eliminado Correctamente');
    }
}
