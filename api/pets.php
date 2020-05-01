<?php
//This file is an API endpoint. It would normally be on a server.
//Scripts (front-end or otherwise can make requests to this file and receive JSON response).
$pets = array(
  'Bear' => array(
    'age' => 4,
    'type' => 'cat',
    'tricks' => array(
      'fetch',
      'roll-over'
    )
  ),
  'Spike' => array(
    'age' => 16,
    'type' => 'fish',
    'tricks' => array(
      'swim through hoop',
      'float upside down'
    )
  ),
  'Bingo' => array(
    'age' => 12,
    'type' => 'dog',
    'tricks' => array(
      'land on all fours',
      'detect milk from 1 mile away'
    )
  ),
  'Lucas' => array(
    'age' => 2,
    'type' => 'newt',
    'tricks' => array(
      'hold breath for 4 minutes',
      'climbing'
    )
  ),
);

header( 'Content-Type: application/json' );

$petsJSON = json_encode( $pets );

echo $petsJSON;
