<?php

class Movie {
    public int $id;
    public string $title;
    public string $overview;
    public float $vote_average;
    public string $poster_path;

    public function __construct($id,$title,$overview,$vote_average,$poster_path) {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote_average;
        $this->poster_path = $poster_path;
    }
}

$movieString = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieString,true);

$movies = [];

foreach($movieList as $movie){
    $movies[]= new Movie($movie['id'],$movie['title'],$movie['overview'],$movie['vote_average'],$movie['poster_path'],);
}

var_dump($movies);

?>