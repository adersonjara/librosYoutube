@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ $message }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Libro" href="{{ route('libros.create') }}"> 
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            @if(sizeof($libros) > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Acciones</th>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Idioma</th>
                        <th scope="col">Fecha de Publicación</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($libros as $libro)
                        <tr>
                            <td>
                                <a href="{{ route('libros.show', $libro) }}" class="btn btn-primary btn-sm shadow-none" 
                                        {{-- target="_blank" --}}
                                        data-toggle="tooltip" data-placement="top" title="Ver Libro">
                                    <i class="fa fa-book fa-fw text-white"></i></a>
                                </a>

                                <a href="{{ route('libros.edit', $libro) }}" class="btn btn-success btn-sm shadow-none" 
                                        {{-- target="_blank" --}}
                                        data-toggle="tooltip" data-placement="top" title="Editar Libro">
                                    <i class="fa fa-pencil fa-fw text-white"></i></a>
                                </a>
                                
                                <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button id="delete" name="delete" type="submit" 
                                            class="btn btn-danger btn-sm shadow-none" 
                                            data-toggle="tooltip" data-placement="top" title="Eliminar Libro"
                                            onclick="return confirm('¿Estás seguro de eliminar?')">
                                        <i class="fa fa-trash-o fa-fw"></i>
                                    </button>
                                </form>
                            </td>
                            <td scope="row">{{ $libro->cod_libro }}</td>
                            <td scope="row">{{ $libro->titulo }}</td>
                            <td scope="row">
                                <em>
                                {{ strlen($libro->descripcion) < 50 ? $libro->descripcion : substr($libro->descripcion, 0, 50) .'...'}}
                                </em>
                            </td>
                            <td scope="row">{{ $libro->idioma }}</td>
                            <td scope="row">{{ date("d/m/Y", strtotime($libro->fecha_publicacion)); }}</td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $libros->links() !!}
                </div>
            </div>
            @else
                <div class="alert alert-secondary">No se encontraron resultados.</div>
            @endif
        </div>
    </div>
</div>
@endsection