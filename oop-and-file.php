<?php
  include './includes/Snacks.Class.php';

?><!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP and File</title>
  </head>
  <body>
    <h1>OOP and File</h1>
    <?php include './includes/navigation.php'; ?>
    <?php
      $snacks = new Snacks( dirname( __FILE__ ).'/data/oop-and-file.json' );
      $snacks->output();
    ?>
    <h2>Find Snack by Index Number</h2>
    <p>The third snack is:<p>
  <?php
    $snacks->findSnackByIndex( 2 );
  ?>
  </body>
</html>