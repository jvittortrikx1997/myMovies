<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatestMoviesController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', [LatestMoviesController::class, 'index'])->name('home');
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

