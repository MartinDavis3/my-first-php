<?php  // Include_once is used to ensure this code is not includeded/run multiple times as this would cause an error
ini_set( 'display_errors', 1);
ini_set( 'display_startup_errors', 1);
error_reporting( E_ALL );
include_once dirname( __FILE__ ).'/Snack.Class.php';
class Snacks {

  //Properties
  private $allSnacks = array();

  //Methods
  function __construct ( $jsonFilePath = '' )
  {
    if ( file_exists( $jsonFilePath ) )
    { //Retrieve file contents as a string
      $jsonString = file_get_contents( $jsonFilePath );
      //convert JSON string to PHP object.
      $jsonObject = json_decode( $jsonString );
      //Store the array in our property
      if ( is_array( $jsonObject->snacks ) )
      {
        $this->allSnacks = $jsonObject->snacks;
      }
      else
      {
      echo '<p>WARNING: Your file does not exist</p>';
      }
    }
    else
    {
      echo '<p>WARNING: Your file does not exist</p>';
    }
  }

  public function output ()
  {
    if ( is_array($this->allSnacks) && !empty($this->allSnacks) )
    {
      echo '<h2>Snacks List</h2><ul>';
      foreach ( $this->allSnacks as $snack )
      {
        $newSnack  = new Snack( $snack->name, $snack->price, $snack->type );
        echo '<li>'.$newSnack->output( FALSE ).'</li>';
      }
      echo '</ul>';
    }
  }

  //find a snack
  public function findSnackByIndex ( $id = FALSE)
  {
    if ( is_integer( $id ))
    {
      if ( isset( $this->allSnacks[$id] ) )
      { // retrieve snack from array!
        $foundSnack = new Snack(
          $this->allSnacks[$id]->name,
          $this->allSnacks[$id]->price,
          $this->allSnacks[$id]->type,
        );
        // Output
        $foundSnack->output();
      }
      // Snack not found
      else
      {
        echo '<p>Sorry, could not find snack ID: '.$id.'</p>';
      }
    }
    // No ID, or invalid ID.
    else
    {
      echo '<p>No ID, or invalid ID. ID passed: '.$id.'</p>';
    }
  }

}