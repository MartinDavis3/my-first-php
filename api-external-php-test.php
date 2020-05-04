<?php
  $randomUserJSONString = file_get_contents( 'http://randomuser.me/api/' );
  $randomUserObject = json_decode( $randomUserJSONString);
  $randomUser = $randomUserObject->results[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP Test</title>
</head>
<body>
  <h1>External API PHP Test</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>Random User</h2>
  <dl>
  <dt>Full Name</dt>
    <dd>
      <?php echo $randomUser->name->title; ?>
      <?php echo $randomUser->name->first; ?>
      <?php echo $randomUser->name->last; ?>
    </dd>
    <dt>Country</dt>
    <dd><?php echo $randomUser->location->country; ?></dd>
    <dt>E-Mail Address</dt>
    <dd><?php echo $randomUser->email; ?></dd>
    <dt>Photograph</dt>
    <dd><img src="<?php echo $randomUser->picture->large; ?>"></dd>
  </dl>
</body>
</html>