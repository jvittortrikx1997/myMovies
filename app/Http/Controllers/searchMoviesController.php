<?php

namespace App\Http\Controllers;

use App\MovieDBApi;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class searchMoviesController extends Controller
{
    public function showMovie($id)
    {
        $api_key = 'd42f1bce2cf41dac4baaf8486d04c76f';

        $apiMovie = new MovieDBApi($api_key, $id);
        $params = ['langauge' => 'pt-BR', 'id_movie' => $id];
        $movieDetails = $apiMovie->getMovies($params);

        //return view('movie-details', ['movie' => $movieDetails]);

    }
}
