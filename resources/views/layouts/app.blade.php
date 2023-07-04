<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <!-- Scripts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body >

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
    <div class="container">
    <a href="{{ route('index') }}"><img src="{{ asset('img/navbarLogo.png') }}" alt="Logo" class="overlay-image center" style="max-width: 100%; max-height: 50px;"></a>
    <a class="navbar-brand fs-1 text" href="{{ route('index') }}" style="margin: 0;">stim</a><a class="navbar-brand fs-1 text" href="{{ route('index') }}" style="color: #e6ae2a; margin: 0;">Verde</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link link-custom" aria-current="page" href="{{ route('index') }}" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-custom" href="{{ route('admin.juegos') }}">Juegos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-custom" href="{{ route('admin.categoria') }}" >Categorias</a>
            </li> 
          </ul>
          <form class="d-flex mt-3 mt-lg-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Juego..." aria-label="Search">
            <button class="btn btn-outline-custom type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
 
    <main class="py-4">
      @yield('content')
    </main>



  </div>  
  <div class="container bg-dark" id="pie">
    <footer class="d-flex justify-content-between align-items-center py-3 border-top bg-dark">
      <p class="col-md-4 mb-0 link-custom">&copy; 2022 Company, Inc</p>

      <a href="/" class="d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/isologo.png') }}" alt="EstimVerde Logo" class="me-2" width="95" height="100">
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="{{ route('index') }}" class="nav-link px-2 link-custom">Home</a></li>
        <li class="nav-item"><a href="{{ route('admin.juegos') }}" class="nav-link px-2 link-custom">Juegos</a></li>         
        <li class="nav-item"><a href="{{ route('admin.categoria') }}" class="nav-link px-2 link-custom">Categorias</a></li> 
        <li class="nav-item"><a href="#" class="nav-link px-2 link-custom">About Us</a></li>
      </ul>
    </footer>
  </div> 
</body>

</html>