<?php

class Movie{

  public $title;
  public $director;
  public $year;
  public $info;

  public function __construct($_title, $_director, $_year){
    $this->title = $_title;
    $this->director = $_director;
    $this->year = $_year;
    $this->setInfo();
  }

  public function setInfo(){
    $this->info = $this->director.' - Anno: '.$this->year;
  }

}

$movie1 = new Movie("Le follie dell'imperatore","Mark Dindal",2000);
$movie2 = new Movie("Il signore degli anelli","Peter Jackson",2001);
$movie3 = new Movie("L'isola dei cani","Wes Anderson",2018);

?>