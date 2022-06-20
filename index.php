<?php
require_once __DIR__ .'/Movie.php';

$movies =[];

$movies[]= $movie1;
$movies[]= $movie2;
$movies[]= $movie3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>
<body>
  <head>
    <h1>Favourite Movies</h1>
  </head>

  <main>
    
  <?php foreach($movies as $movie): ?>
    <h3>
      <?php echo $movie->title; ?>
    </h3>
    <p>
      <?php 
        echo $movie->info;
      ?>
    </p>
  <?php endforeach ?>
    

  </main>

  
</body>
</html>