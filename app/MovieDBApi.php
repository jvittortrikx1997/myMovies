<?php

namespace App;

class MovieDBApi
{
    private $api_key;
    private $id_movie;

    public function __construct($api_key, $id_movie)
    {
        $this->api_key = $api_key;
        $this->id_movie = $id_movie;
    }

    public function buildUrl($route)
    {
        return "https://api.themoviedb.org/3/{$route}?api_key=".$this->api_key."";
    }

    public function getMovies($params = [])
    {
        $url = $this->buildUrl("movie/{$this->id_movie}");

        if(!empty($params))
        {
            $url .= '&' .http_build_query($params);
        }

        $response = file_get_contents($url);
        $data = json_decode($response);

        return $data;
    }
}
?>
