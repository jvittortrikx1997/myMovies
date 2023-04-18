<?php

namespace App;
use Illuminate\Support\Facades\Http;

class LatestMoviesService
{

    private $apiKey;
    private $apiUrl;

    public function __construct()
    {
        $this->apiKey = config('services.tmdb.key');
        $this->apiUrl = 'https://api.themoviedb.org/3/movie/latest';
    }

    public function getLatestMovies()
    {
        $response = Http::get($this->apiUrl, [
            'api_key' => $this->apiKey,
        ]);

        $movies = $response->json();

        return $movies;

    }
}
?>
