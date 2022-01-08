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
                <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Autor" href="{{ route('autores.create') }}"> 
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            @if(sizeof($autores) > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Acciones</th>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Sexo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($autores as $autor)
                        <tr>
                            <td class="text-center">
                                <a href="{{ route('autores.show', $autor) }}" class="btn btn-primary btn-sm shadow-none" 
                                            {{-- target="_blank" --}}
                                        data-toggle="tooltip" data-placement="top" title="Ver Autor">
                                    <i class="fa fa-book fa-fw text-white"></i></a>
                                </a>

                                <a href="{{ route('autores.edit', $autor) }}" class="btn btn-success btn-sm shadow-none" 
                                        {{-- target="_blank" --}}
                                        data-toggle="tooltip" data-placement="top" title="Editar Autor">
                                    <i class="fa fa-pencil fa-fw text-white"></i></a>
                                </a>
                                
                                <form action="{{ route('autores.destroy', $autor) }}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button id="delete" name="delete" type="submit" 
                                            class="btn btn-danger btn-sm shadow-none" 
                                            data-toggle="tooltip" data-placement="top" title="Eliminar Autor"
                                            onclick="return confirm('¿Estás seguro de eliminar?')">
                                        <i class="fa fa-trash-o fa-fw"></i>
                                    </button>
                                </form>
                            </td>
                            <td scope="row">{{ $autor->cod_autor }}</td>
                            <td scope="row">{{ $autor->nombres }}</td>
                            <td scope="row">{{ $autor->apellidos }}</td>
                            <td scope="row">{{ $autor->sexo->descripcion }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $autores->links() !!}
                </div>
            </div>
            @else
                <div class="alert alert-secondary">No se encontraron resultados.</div>
            @endif
        </div>
    </div>
</div>
@endsection