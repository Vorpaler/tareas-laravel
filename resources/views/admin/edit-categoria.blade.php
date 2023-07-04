@extends('layouts.app')

@section('content')

<div class="section py-5">
    <div class="container mt-5 mb-5 py-5" style="background-color: #e6ae2a;">

        <form action="{{ route('admin.update-categoria', $categoria) }}" method="POST">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" value="{{ $categoria->nombre }}" />
                <label class="form-label" for="form6Example1">Nombre Categoria</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" value="{{ $categoria->descripcion }}" />
                <label class="form-label" for="form6Example3">Descripcion</label>
            </div> 

            <!-- Submit button -->
            <button type="submit" class="btn btn-success">Guardar Modificacion</button>
            <a class="main-button" href="{{ route('admin.categoria') }}">Regresar</a>
        </form>

    </div>
</div>

@endsection
