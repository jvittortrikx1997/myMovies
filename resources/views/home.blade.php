@extends('layouts.head')
@section('head')
@endsection
<body>
<header class="d-flex justify-content-between align-items-center">
    <div>
       <h1 class="align-self-start">My Movies 🎬</h1>
   </div>
   <div class="ml-auto">
        <a href="{{ route('home') }}" class="btn ml-2 my-btn">Home</a>
        <a href="{{ route('login') }}" class="btn mr-2 my-btn">Login</a>
       <a href="{{ route('cadastro') }}" class="btn ml-2 my-btn">Cadastrar</a>
   </div>
</header>
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach ($result as $index => $movie)
                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="mx-auto d-block w-25 h-50">

                    <h5 class="text-center mt-2">{{ $movie->title }}</h5>
                </div>
                </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Próximo</span>
            </button>
          </div>
    </main>
    @extends('layouts.footer')
    @section('footer')
    @endsection
</body>
</html>
