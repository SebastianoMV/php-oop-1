<?php

class Movie{

  public $title;
  public $director;

  public function __construct($_title, $_director){
    $this->title = $_title;
    $this->director = $_director;
  }

}

$movie1 = new Movie("Le follie dell'imperatore","Mark Dindal");
$movie2 = new Movie("Il signore degli anelli","Peter Jackson");
$movie3 = new Movie("L'isola dei cani","Wes Anderson");

?>