<?php
class Snack {
  // Properties (with default values).
  // PUBLIC means it can be overwitten OUTSIDE of the class
  public $name = '';
  public $price = 0.00;
  public $type = '';
  //Methods. (NOTE: Double underscore)
  function __construct ( $name = '', $price = 0.00, $type = 'Uncategorized')
  {
    if ( is_string( $name ) && !empty( $name ) )
    {   //curly brackets optional for one line statements
      $this->name = $name;
    }
    if ( is_float( $price ) && !empty( $price ) )
    {
      $this->price = $price;
    }
    if ( is_string( $type ) && !empty( $type ) )
    {
      $this->type = $type;
    }
  }
//
  public function output ( $echo = TRUE ) //set up so that you can choose to actually output or not depending on passed parameter.
  {
    $output = '';
    ob_start(); //begins an output buffer.
    ?>
      <dl>
        <dt>Name</dt>
        <dd><?php echo $this->name; ?></dd>
        <dt>Price</dt>
        <dd><?php echo $this->price; ?></dd>
        <dt>Type</dt>
        <dd><?php echo $this->type; ?></dd>
      </dl>
    <?php // ob_get_clean() clears the output buffer and returns what the string was.
    $output = ob_get_clean(); // We now have
    if ( $echo === TRUE ) echo $output;
    return $output;
  }
}

