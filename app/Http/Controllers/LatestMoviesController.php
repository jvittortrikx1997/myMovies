<?php

namespace App\Http\Controllers;

use App\LatestMoviesService;
use Illuminate\Http\Request;

class LatestMoviesController extends Controller
{
    public function index()
    {
        $movies = new LatestMoviesService();
        $result = $movies->getLatestMovies();

        return view('home', compact('result'));
    }
}
