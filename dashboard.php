<?php 
  //Allow the config
  define('__CONFIG__',true);
  //require the config
  require_once "inc/config.php"; 
  Page::forceLogin();

  $User = new User($_SESSION['user_id']);

?>


<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Dashboard</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.7/css/uikit.min.css" />
  </head>

  <body class="uk-background-muted uk-background-cover uk-height-1-1" style="background-image: url(https://wallpaperplay.com/walls/full/d/d/c/148337.jpg);">

  	<div class="uk-section uk-container uk-light">
  		<h2>Dashboard</h2>
      <p>Hello <?php echo ucfirst($User->firstname); ?> . You registered on <?php echo $User->reg_time; ?> </p>
      <div class="uk-margin">
              <button class="uk-button uk-button-default" onclick="window.location='/logout.php';" type="submit">Logout</button>
      </div>
  	</div>

  <?php require_once "inc/footer.php" ?>

  </body>
</html>