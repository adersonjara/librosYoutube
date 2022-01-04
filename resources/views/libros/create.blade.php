@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form  action="{{ route('libros.store') }}" method="POST" class="row g-3">
              @csrf
              <div class="col-md-6">
                <label for="titulo" class="form-label">Título de Libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
                @error('titulo')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="idioma" class="form-label">Idioma</label>
                <select id="idioma" class="form-select" name="idioma" value="{{ old('idioma') }}">
                  <option value="" selected>Seleccionar...</option>
                  <option value="{{ $idiomas[0] }}" {{ old('idioma') == $idiomas[0] ? 'selected' : '' }}>{{ $idiomas[0] }}</option>
                  <option value="{{ $idiomas[1] }}" {{ old('idioma') == $idiomas[1] ? 'selected' : '' }}>{{ $idiomas[1] }}</option>
                  <option value="{{ $idiomas[2] }}" {{ old('idioma') == $idiomas[2] ? 'selected' : '' }}>{{ $idiomas[2] }}</option>
                </select>
                @error('idioma')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripción de Libro</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" value="">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                <input class="form-control" type="date" name="fecha_publicacion" value="{{old('fecha_publicacion')}}"/>
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
@endsection