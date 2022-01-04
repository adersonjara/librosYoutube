@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">

            <form  action="{{ route('libros.update', $libro) }}" method="POST" class="row g-3">
              @csrf
              @method('PUT')
              <div class="col-md-6">
                <label for="titulo" class="form-label">Título de Libro</label>
                <input type="text" class="form-control shadow-none shadow-none" id="titulo" name="titulo" value="{{ old('titulo', $libro->titulo) }}">
                @error('titulo')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="idioma" class="form-label">Idioma</label>
                <select id="idioma" class="form-select shadow-none" name="idioma" value="{{ old('idioma') }}">
                  <option value="" selected>Seleccionar...</option>
                  <option value="{{ $idiomas[0] }}" {{ $libro->idioma == $idiomas[0] ? 'selected' : '' }}>{{ $idiomas[0] }}</option>
                  <option value="{{ $idiomas[1] }}" {{ $libro->idioma == $idiomas[1] ? 'selected' : '' }}>{{ $idiomas[1] }}</option>
                  <option value="{{ $idiomas[2] }}" {{ $libro->idioma == $idiomas[2] ? 'selected' : '' }}>{{ $idiomas[2] }}</option>
                </select>
                @error('idioma')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripción de Libro</label>
                <textarea class="form-control shadow-none" name="descripcion" id="descripcion" cols="30" rows="5" value="">{{ old('descripcion', $libro->descripcion)}}</textarea>
                @error('descripcion')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                <input class="form-control shadow-none" type="date" name="fecha_publicacion"  value="{{ old('fecha_publicacion',date("Y-m-d", strtotime($libro->fecha_publicacion))); }}">
                @error('fecha_publicacion')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-dismissible").alert('close');
        });

        $('[data-toggle="tooltip"]').tooltip()
        /*window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 2000);*/

    });
</script>  
@endsection