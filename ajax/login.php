<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];
		// Make sure the user does not exist. 
		$user_found= User::Find($email,true);

		if($user_found) {
			// User exists 
			$user_id=(int) $user_found['user_id'];
			$hash= $user_found['password'];
			if(password_verify($password, $hash)) {
				//user is signed in
				$return['redirect'] = '/dashboard.php';
				$_SESSION['user_id']=$user_id;
			} else {
				///invalid credentials
				$return['error']="Invalid email/password!";
			}
		} else {
			//they need to create an  account
			$return['error']="You do not have an account. <a href='/register.php'>Create One now?</a>";
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>