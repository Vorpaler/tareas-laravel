@extends('layouts.app')

@section('content')

<div class="section py-5">
    <div class="container mt-5 mb-5 py-5" style="background-color: #e6ae2a;">

    <form method="POST" action="{{ route('admin.agre-categoria') }}" >
            @csrf
            <!-- Nombre input -->
                <div class="form-outline">
                    <input type="text" name="nombre" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">Nombre</label>
                </div>

            <!-- Descripcion input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" name="descripcion" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Descripcion del categoria</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Agregar</button>
            <div class="main-button">
                <a class="main-button" href="{{ route('admin.categoria') }}">Regresar</a>
            </div>

        </form>

    </div>
</div>


@endsection