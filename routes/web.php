<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatestMoviesController;
use App\Http\Controllers\CadastroController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', [LatestMoviesController::class, 'index']);
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
