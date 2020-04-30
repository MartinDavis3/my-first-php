<?php
$myMessage = 'My First PHP!';
  $myObject = new stdClass();
  $myArray = [ 'first', 'second' ];
  $myOtherArray = array( $myMessage, $myArray );
  $concatString = 'This is a ' . 'concatenated string.';
  $mySingleQuoteString = ' string.';
  $myDoubleQuoteString ="This is a $mySingleQuoteString";
  $myDoubleQuoteString ="This is a {$mySingleQuoteString}";  //alternative - more control over where variable name starts and ends
  // Note: Variable names are case sensitive.
  