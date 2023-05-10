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
    <main class="container grid-lg">
        <div class="columns">
          <div class="column col-3 col-sm-12">
            <div class="panel">
              <div class="panel-header text-center">
                <figure class="avatar avatar-xl" data-initial="JS"></figure>
                <h4 class="panel-title">John Smith</h4>
                <div class="panel-subtitle">Frontend Developer</div>
              </div>
              <div class="panel-body">
                <ul class="menu">
                  <li><a href="#">Repositórios</a></li>
                  <li><a href="#">Favoritos</a></li>
                  <li><a href="#">Seguidores</a></li>
                  <li><a href="#">Seguindo</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="column col-9 col-sm-12">
            <div class="panel">
              <div class="panel-header">
                <h3 class="panel-title">Overview</h3>
              </div>
              <div class="panel-body">
                <div class="columns">
                  <div class="column col-6 col-sm-12">
                    <div class="tile tile-centered">
                      <div class="tile-icon">
                        <i class="icon icon-people"></i>
                      </div>
                      <div class="tile-content">
                        <p class="tile-subtitle">Followers</p>
                        <p class="tile-title">320</p>
                      </div>
                    </div>
                  </div>
                  <div class="column col-6 col-sm-12">
                    <div class="tile tile-centered">
                      <div class="tile-icon">
                        <i class="icon icon-star"></i>
                      </div>
                      <div class="tile-content">
                        <p class="tile-subtitle">Repositories</p>
                        <p class="tile-title">32</p>
                      </div>
                    </div>
                  </div>
                  <div class="column col-6 col-sm-12">
                    <div class="tile tile-centered">
                      <div class="tile-icon">
                        <i class="icon icon-repo-forked"></i>
                      </div>
                      <div class="tile-content">
                        <p class="tile-subtitle">Forks</p>
                        <p class="tile-title">54</p>
                      </div>
                    </div>
                  </div>
                  <div class="column col-6 col-sm-12">
                    <div class="tile tile-centered">
                      <div class="tile-icon">
                        <i class="icon icon-eye"></i>
                      </div>
                      <div class="tile-content">
                        <p class="tile-subtitle">Views</p>
                        <p class="tile-title">438</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</body>
@extends('layouts.footer')
@section('footer')
@endsection
</body>
</html>
