<?php
ini_set( 'display_errors', 1);
ini_set( 'display_startup_errors', 1);
error_reporting( E_ALL );
//
//A basic object
$myObject = new stdClass(); //"new" keyword is required
// to add a property -> syntax.
$myObject->name             = "jim Bob-Bob";
$myObject->age              = 41;
$myObject->interests = array( 'PHP', 'CSS' );
//Include class blueprint file
include './includes/Snack.Class.php';


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
  </head>
  <body>
    <h1>PHP OOP</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>$myObject</h2>
    <pre>
      <?php var_dump( $myObject); ?>
    </pre>
  </body>
</html>
