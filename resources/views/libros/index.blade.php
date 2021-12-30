@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Libros</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Idioma</th>
                        <th scope="col">Fecha de Publicación</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($libros as $libro)
                        <tr>
                            <td scope="row">{{ $libro->cod_libro }}</td>
                            <td scope="row">{{ $libro->titulo }}</td>
                            <td scope="row">
                                {{ substr($libro->descripcion, 0, 50) }} {{ '...' }}
                            </td>
                            <td scope="row">{{ $libro->idioma }}</td>
                            <td scope="row">{{ $libro->fecha_publicacion }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $libros->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection