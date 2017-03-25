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
			add_product_ctrl(false);
			break;		
		case "add_product_ajax":
			add_product_ctrl(true);
			break;
		case "edit_product":
			edit_product_ctrl();
			break;		
		case "edit_product_ajax":
			edit_product_ajax_ctrl();
			break;
		case "delete_product":
			delete_product_by_id_ctrl($_GET["id"]);
			break;		
		case "delete_product_ajax":
			delete_product_by_id_ctrl($_GET["id"],true);
			break;	
		case "get_all_product":
			get_all_products_ajax(16);
		default:
			echo "";
	}
	

?>