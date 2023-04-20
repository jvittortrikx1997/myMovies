@extends('layouts.head')
@section('head')
@endsection

<body>
    <header class="d-flex justify-content-between align-items-center">
        <div>
           <h1 class="align-self-start">My Movies 🎬</h1>
       </div>
       <div class="ml-auto">
           <a href="" class="btn mr-2 my-btn">Login</a>
           <a href="{{ route('cadastro') }}" class="btn ml-2 my-btn">Cadastrar</a>
       </div>
    </header>
 <main>
    <form action="POST" class="cadastro">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="col-5">
                <div>
                    <div>
                        Username:
                    </div>
                    <div>
                        <input type="text">
                    </div>
                    <div>
                        Password:
                    </div>
                    <div>
                        <input type="text">
                    </div>
                    <div>
                        Confirm Password:
                    </div>
                    <div>
                        <input type="text">
                    </div>
                    <div>
                        E-Mail:
                    </div>
                    <div>
                        <input type="text">
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
