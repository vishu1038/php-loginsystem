<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Page {
	static function forceLogin() {
		if(isset($_SESSION['user_id'])) {
			//the user  is  allowed in here
		}
		else {
			//redirect to login
			header("Location: /login.php");exit;
		}
	}

	static function forceDash() {
		if(isset($_SESSION['user_id'])) {
			//the user  is  logged in;
			header("Location: /dashboard.php");exit;
		}
		else {
			//The user is not allowed here
		}
	}
}

?>