<?php
// Indexed arrays
$myIndexedArray = array('Dog', 'Cat');
$secondItem = $myIndexedArray[1];
// Add a new element
$myIndexedArray[] = 'Lizard';


// Associative arrays.
$myAssociativeArray = array(
  'name' => 'Bob',
  'age' => 36,
  'interests' => array(
    'PHP',
    'JavaScript',
    'Hiking'
  )
);
//Retrieve specific value
$bobAge = $myAssociativeArray['age'];
// Add a new key/value pair
$myAssociativeArray['occupation'] = 'Programmer';
// Get a specific interest
$secondInterest = $myAssociativeArray['interest'][1];
// Add an interes
$myAssociativeArray['interests'][] = 'HTML';


?><!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
  </head>
  <body>
    <header>
    </header>
    <h1>Arrays</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>Indexed Array</h2>
    <ul>
      <?php foreach ( $myIndexedArray as $item ) :  // one syntax - use the colon at end of foreach line and then endforeach at end of block.?>
        <li>
          <?php echo( $item ); ?>
      <?php endforeach; ?>
    </ul>
    <h2>Associative Array</h2>
    <dl>
      <?php foreach ( $myAssociativeArray as $key => $value ) { // a different syntax usin curly brackets ?>
        <dt><?php echo( $key ); ?></dt>
        <dd>
          <?php
            if ( is_array( $value ) )
            {
              foreach ( $value as $element ) echo $element . ', ';
            }
            else
            {
              echo( $value );
            }
          ?>
        </dd>
      <?php }  //Ends our  first foreach ?>
    </dl>
  </body>
</html>
