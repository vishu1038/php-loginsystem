<?php 
  //Allow the config
  define('__CONFIG__',true);
  //require the config
  require_once "inc/config.php"; 
?>
<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Index</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.7/css/uikit.min.css" />
  </head>

  <body class="uk-background-muted uk-background-cover uk-height-1-1" style="background-image: url(https://wallpaperplay.com/walls/full/d/d/c/148337.jpg);" >
    <div class="uk-section uk-container uk-text-center uk-h3 uk-light">
  	<?php 
      echo "Today: ".date("d m Y");
    ?>
    <p>
      <div class="uk-margin" style="display: inline-block;">
              <button class="uk-button uk-button-default" onclick="window.location='/login.php';" type="submit">Login</button>
          </div>
      <div class="uk-margin" style="display:inline-block;">
              <button class="uk-button uk-button-default" onclick="window.location='/register.php';" type="submit">Register</button>
      </div>
    </p>
  </div>
  <?php require_once "inc/footer.php" ?>

  </body>
</html>