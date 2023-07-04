@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="section py-5">
    <div class="container mt-5 mb-5 py-5" style="background-color: #e6ae2a;">
        <form action="{{ route('admin.update-juego', $juego) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-4">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="nombre" value="{{ $juego->nombre }}" />
                    <label class="form-label" for="form6Example1">Nombre de juego</label>
                </div>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" name="descripcion" value="{{ $juego->descripcion }}" />
                <label class="form-label" for="form6Example3">Descripcion</label>
            </div>

            <div class="form-outline mb-4">
                <input type="number" id="form6Example4" class="form-control" name="precio" value="{{ $juego->precio ?? '' }}" />
                <label class="form-label" for="form6Example4">Precio</label>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-success"> Guardar Modificacion </button>
            <a class="main-button" href="{{ route('admin.juegos') }}">Regresar</a>
        </form>
    </div>
</div>

@endsection