<?php
	include 'functions.php';
	include 'functions/product_functions.php';
	include 'functions/user_functions.php';
	include 'model.php';

	$action = isset($_GET["action"])?$_GET["action"]:"";
	
	switch ($action) {
		case "user-login":
			check_login();
			break;		
		case "sign-out":
			sign_out();
			break;
		case "new_user":
			new_user_ctrl();
			break;		
		case "add_product":
			add_product_ctrl();
			break;
		case "edit_product":
			edit_product_ctrl();
			break;
		case "delete_product":
			delete_product_by_id_ctrl($_GET["id"]);
			break;			
		default:
			echo "";
	}
	

?>