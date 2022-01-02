@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ $message }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <p>&nbsp;</p>
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('libros.create') }}"> Agregar Libro</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Idioma</th>
                        <th scope="col">Fecha de Publicación</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                    ?>
                    @foreach ($libros as $libro)
                        <tr>
                            <td scope="row">{{$i}}</td>
                            <td scope="row">{{ $libro->titulo }}</td>
                            <td scope="row">
                                <em>
                                {{ strlen($libro->descripcion) < 50 ? $libro->descripcion : substr($libro->descripcion, 0, 50) .'...'}}
                                </em>
                            </td>
                            <td scope="row">{{ $libro->idioma }}</td>
                            <td scope="row">{{ date("d/m/Y", strtotime($libro->fecha_publicacion)); }}</td>
                        </tr>
                        <?php
                            $i++;
                        ?>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {

        /*$(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-dismissible").alert('close');
        });*/

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 2000);

    });
</script>  
@endsection