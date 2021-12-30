@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>&nbsp;</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Sexo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($autores as $autor)
                        <tr>
                            <td scope="row">{{ $autor->cod_autor }}</td>
                            <td scope="row">{{ $autor->nombres }}</td>
                            <td scope="row">{{ $autor->apellidos }}</td>
                            <td scope="row">{{ $autor->sexo }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $autores->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection