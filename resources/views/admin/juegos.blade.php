@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="page-content">
            <!--TABLA DE JUEGOS-->
            <section class="mt-3">
                <h2>Catalogo de Juegos</h2>
                <div class="d-flex ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Juego</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col" class="justify-content-center">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($juegos->count()>0)
                                @foreach($juegos as $juego)

                            <tr>
                                <th scope="row">{{ $juego->id_Juego }}</th>
                                <td>{{ $juego->nombre }}</td>
                                <td>{{ $juego->precio ? '$' . $juego->precio  : 'Free' }}</td>
                                <td> {{ $juego->categoria ? $juego->categoria->nombre : 'N/A' }}
                                <td>
                                <div class="main-button-edit">
                                <a href="{{ route('admin.edit-juego', $juego->id) }}" class="btn">Editar Juego</a>

                                    </div>                                
                                    </div>
                                    <div class="main-button-elim">
                                    <a href="">Eliminar Juego</a>
                                    </div>
                </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center"> No se han encontrado juegos.</td>
                    </tr>
                @endif
                </tbody>
                </table>


            </section>
            <div class="d-flex justify-content-end">
                <div class="main-button">
                    <a href="{{ route('admin.agre-juego') }}">AGREGAR</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        {{ $juegos->links() }}
    </div>
</section>

@endsection