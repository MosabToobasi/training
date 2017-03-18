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

	function add_new_product($product_obj){
		$conn = connect_db();
		
		$prepare = $conn->prepare("INSERT INTO `product_tbl` 
		(`id`, `name`, `price`, `color`) 
		VALUES (NULL, ?, ?, ?)");
		
		$prepare->bind_param('sss',
		$product_obj['name'],
		$product_obj['price'],
		$product_obj['color']);
		
		if($prepare->execute() === True){
			return 1;
		}else{
			echo $conn->error;
		}
	
		
	}	
	
	function edit_product($product_obj){
		
		
		$conn = connect_db();
		
		$prepare = $conn->prepare("UPDATE `product_tbl` 
		set `name` = ?, `price` = ?, `color` = ? 
		where `id` = ? ");
		
		$prepare->bind_param('sssd',
		$product_obj['name'],
		$product_obj['price'],
		$product_obj['color'],
		$product_obj['id']
		);
		
	
		if($prepare->execute() === True){
			return 1;
		}else{
			echo $conn->error;
		}
	
		
	}	
	
	function delete_product($id){
		
		$conn = connect_db();
		$prepare = $conn->prepare("DELETE From `product_tbl` where `id` = ? ");
		$prepare->bind_param('d',$id);
		
	
		if($prepare->execute() === True){
			return 1;
		}else{
			return -99;
		}
	
		
	}	
	
	function get_product($id){
		
		$conn = connect_db();
		
		$sql = "SELECT * FROM product_tbl where id=?";
		
		$prepare = $conn->prepare($sql);
		
		$prepare->bind_param('d', $id);
		
		$prepare->execute();
		
		$result = $prepare->get_result();
		
		$prepare->close();
		
		  
	    return $result->fetch_object();
		
	}
	
	
	function get_products($limit){
		$conn = connect_db();
		$sql = "SELECT * FROM product_tbl limit ?";
		$prepare = $conn->prepare($sql);
		$prepare->bind_param('d', $limit);
		$prepare->execute();
		$result = $prepare->get_result();
		$prepare->close();
		$products = null;
		while($product = $result->fetch_object()){
			$products[] = $product;
		}
	    return $products;
		
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