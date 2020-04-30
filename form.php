<?php
  session_start();  //BEFORE any output, you must decide if you want to use a session.
  if ( !isset( $_SESSION['interests'] ) )
  {
    $_SESSION['interests'] = array();
  }
  $_SESSION['interests'] = array_values( $_SESSION['interests'] );
  $message = 'Welcome, please log in';
  // $_GET [array] and $_POST [array] are called superglobals.
  if ( isset( $_POST ) && !empty( $_POST ) )
  {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
    // Expected username and password
    $username = 'martin';
    $password = 'mypass';
    if ( ( $username === $submittedUsername ) && ( $password === $submittedPassword ) )
    {
      $message = 'Hello, ' . $username . ', thank you for logging in';
      // Add new element to an array with push function.
      array_push($_SESSION['interests'], $_POST['interest']);
    }
    else
    {
      $message = 'Error, please try again';
    }
  }
  // Note PHP allows either associative arrays (key, value pairs), or indexed arrays.
?><!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
  </head>
  <body>
    <header>
      <h1>PHP Form Handling</h1>
      <?php include './includes/navigation.php'; ?>
      <h2>Sign In Form</h2>
      <p>
       <?php echo $message; ?>
      </p>
      <form action="./form.php" method="POST"> <?php // Forms can use GET or POST method.?>
        <label for="username">
          Username:
          <input type="text" name="username" id="username">
        </label>
        <label>
        <label for="password">
          Password:
          <input type="password" name="password" id="password">
        </label>
        <label for ="interest">
          Add an interest:
          <input type="text" name="interest" id="interest">
        </label>
          <input type="submit" value="Sign In">
        </label>
      </form>
      <?php if ( !empty( $_SESSION['interests'] ) ) : ?>
        <h2>My Interests:</h2>
        <ul>
          <?php foreach ( $_SESSION['interests'] as $interest ) : ?>
            <li>
              <?php echo $interest; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <pre>
        <strong>$_POST contents:</strong>
        <?php var_dump( $_POST ); ?>
      </pre>
      <pre>
        <strong>$_SESSION contents:</strong>
        <?php var_dump( $_SESSION ); ?>
      </pre>
    </header>
  </body>
</html>