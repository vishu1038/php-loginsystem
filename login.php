<?php 
  //Allow the config
  define('__CONFIG__',true);
  //require the config
  require_once "inc/config.php"; 
  Page::forceDash();
?>
<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Login</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.7/css/uikit.min.css" />
  </head>

  <body class="uk-background-muted uk-background-cover uk-height-1-1" style="background-image: url(https://wallpaperplay.com/walls/full/d/d/c/148337.jpg);">

  	<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1 uk-light" uk-grid>
			<form class="uk-form-stacked js-login">
          <h2>Login</h2>
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="Enter Your Email">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Enter Your Password">
			        </div>
			    </div>
          <div class="ek-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>
			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Login</button>
			    </div>

			</form>
  		</div>
  	</div>

  <?php require_once "inc/footer.php" ?>

  </body>
</html>