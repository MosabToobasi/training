<?php
	include 'functions.php';
	include 'functions/user_functions.php';
	include 'model.php';
	
	
	$action = $_GET["action"];
	
	switch ($action) {
		case "user-login":
			check_login($_POST['email'], $_POST['password']);
			break;		
		case "sign-out":
			sign_out();
			break;
		case "new_user":
			new_user_ctrl();
			break;			
		default:
			echo "Welcome!";
	}
	

?>