<?php 
  //Allow the config
  define('__CONFIG__',true);
  //require the config
  require_once "inc/config.php"; 
  Page::forceLogin();

  $User = new User($_SESSION['user_id']);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.7/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<h2>Dashboard</h2>
      <p>Hello <?php echo ucfirst($User->firstname); ?> . You registered on <?php echo $User->reg_time; ?> </p>
      <a href="/logout.php">Logout</a>
  	</div>

  <?php require_once "inc/footer.php" ?>

  </body>
</html>