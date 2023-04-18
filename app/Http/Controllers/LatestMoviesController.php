<?php

namespace App\Http\Controllers;

use App\lancamentosDBApi;
use Illuminate\Http\Request;

class LatestMoviesController extends Controller
{
    public function index(Request $request)
    {
        $movies = $latestMoviesService->getLatestMovies();

        dd($movies);
        //return view('latest-movies', ['movies' => $movies]);
    }
}
