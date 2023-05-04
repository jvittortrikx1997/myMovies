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
    <form method="POST" class="login" name="login" id="login" action="{{ route('register') }}">
        @csrf
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="col-5">
                <div>
                    <div>
                        Username:
                    </div>
                    <div>
                        <input name="username" id="username" type="text">
                    </div>
                    <div>
                        Password:
                    </div>
                    <div>
                        <input name="password" id="password" type="text">
                    </div>
                    <div>
                        @if(!empty($type) && !empty($msg))
                            <div style="color: {{ $type == 'success' ? 'green' : 'red' }};">{{ $msg }}</div>
                        @endif
                    </div>
                    <div>
                        <button type="submit">Entrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
 </main>
</body>
@extends('layouts.footer')
@section('footer')
@endsection
</body>
</html>
