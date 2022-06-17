<?php

class Movie{

  public $title;
  public $director;

  

}

$movie1 = new Movie();
$movie2 = new Movie();

$movie1->title = "Le follie dell'imperatore";
$movie1->director = "Mark Dindal";

$movie2->title = "Il signore degli anelli";
$movie2->director = "Peter Jackson";

var_dump($movie1);
var_dump($movie2);
?>