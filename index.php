<?php
require_once __DIR__ .'/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <head>
    <h1>Favourite Movies</h1>
  </head>

  <main>
    <h3>
      <?php echo $movie1->title; ?>
    </h3>

    <h3>
      <?php echo $movie2->title; ?>
    </h3>

    <h3>
      <?php echo $movie3->title; ?>
    </h3>
  </main>
  
</body>
</html>