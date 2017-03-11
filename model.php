<?php
	function add_new_user($user_obj){
		
		
		$conn = connect_db();
		print_r($user_obj);
		
		$prepare = $conn->prepare("INSERT INTO `user_tbl` 
		(`id`, `email`, `password`, `fullname`, `type`) 
		VALUES (NULL, ?, ?, ?, '1')");
		
		$prepare->bind_param('sss',
		$user_obj['email'],
		$user_obj['password'],
		$user_obj['fullname']);
		
	
		if($prepare->execute() === True){
			return 1;
		}else{
			echo $conn->error;
		}
	
		
	}
	
	
	function is_email_exsit($email){
		
		//TODO: write the select statment
		return false;
	}
	
	function get_user_by_email_password(){
		
		return true;
	}

	function connect_db(){
		$server = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "ecommerce";
		
		$conn = new mysqli($server, $dbuser, $dbpass, $dbname);
		if ($conn->connect_error) {
			
			return -99;
		}else{
			return $conn;
		}
	
	}


?>