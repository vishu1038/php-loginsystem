<?php
	function forceLogin() {
		if(isset($_SESSION['user_id'])) {
			//the user  is  allowed in here
		}
		else {
			//redirect to login
			header("Location: /login.php");exit;
		}
	}

	function forceDash() {
		if(isset($_SESSION['user_id'])) {
			//the user  is  logged in;
			header("Location: /dashboard.php");exit;
		}
		else {
			//The user is not allowed here
		}
	}
?>