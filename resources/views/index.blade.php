@extends('layouts.app')

@section('content')

<!-- intro -->
<section class="pt-5">
  <div class="container">
    <div class="row gy-4">
      <div class="main-banner" style="background-image: url('{{ asset('img/banner-bg.jpg') }}')">
        <div class="row">
          <div class="header-text d-flex align-items-center">
            <h6>Bienvenido a </h6>
            <h6 class="ms-3"> Estim</h6>
            <h6 style="color:#e6ae2a;">Verde</h6>
          </div>
          <h4>Todos los juegos que estabas buscando, <br> En un solo lugar.</h4>
        </div>
      </div>
    </div>

    <!-- row //end -->
  </div>
  <!-- container end.// -->
</section>

<!-- category -->
<section>
  <div class="container pt-5">
    <nav class="row gy-4">
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="main-button" data-mdb-ripple-color="dark">
                <i class="fas fa-couch fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Interior items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-basketball-ball fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Sport and travel</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-ring fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Jewellery</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-clock fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Accessories</div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-car-side fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Automobiles</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-home fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Home items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-guitar fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Musical items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-book fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Book, reading</div>
            </a>
          </div>
        </div>
      </div>
  </div>
  </nav>
  </div>
</section>
<!-- category -->

<!-- Products -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>Los mas jugados</h3>
    </header>

    <div class="row">

      @foreach($juegos as $jue)
      <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
        <div class="card my-2 shadow-0 h-100" id="card" >
          <a href="#" class="">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2  ">
              </div>
            </div>
            <img src="{{ asset($jue->path_imagen) }}" class="card-img-top rounded-2 p-3" style="aspect-ratio: 1 / 1;" />
          </a>
          <div class="card-body  p-3">
            <div class="main-button text-end">
              <a href="#"> Agregar al carrito</a>
            </div> 
            <h5 class="card-title">{{ $jue->precio ? '$' . $jue->precio  : 'Free' }}</h5>
            <p class="card-text mb-0">{{ $jue->nombre }}</p>
            <p class="text-muted">
              {{ $jue->categoria ? $jue->categoria->nombre : 'N/A' }}
            </p>
          </div>
        </div>
      </div>
      @endforeach

    </div>
</section>
<!-- Products -->
<!-- paginado -->
<section>
  <div class="container">
    {{ $juegos->links() }}
  </div>
</section>



  @endsection