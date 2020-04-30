<?php
  include './includes/datatypes.php';
?><!DOCTYPE html> <!-- put ?> directly at start of line like this because browser is expecting "<!DOCTYPE" as very first line. -->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $myMessage; ?></title>
  </head>
  <body>
    <header>
      <h1><?php echo $myMessage; ?></h1>
      <?php include './includes/navigation.php'; ?>
      <pre>  <!-- makes sure CSS does not affect the output -->
        <?php var_dump( $myOtherArray); ?>
      </pre>
      <h2>Concatenated Strings</h2>
      <p>
        <?php echo $concatString; ?>
      </p>
      <p>
        <?php echo $myDoubleQuoteString; ?>
      </p>
    </header>
  </body>
</html>