<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchMoviesController;
use App\Http\Controllers\LatestMoviesController;


Route::get('/search/{id}', [SearchMoviesController::class, 'showMovie']);
Route::get('/lancamentos', [LatestMoviesController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
