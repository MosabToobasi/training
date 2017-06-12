<?php

function add_product_ajax_ctrl(){
	$name = "";
	$price = "";
	$color = "";
	
 
	if(isset($_POST["name"])){
		$name = $_POST["name"];	
	}
	if(isset($_POST["price"])){
		$price = $_POST["price"];	
	}
	if(isset($_POST["color"])){
		$color = $_POST["color"];	
	}

	$product_obj["name"] = $name;
	$product_obj["price"] = $price;
	$product_obj["color"] = $color;
	
	$result = add_new_product($product_obj);//inser product to db

	echo $result;
	die();
	
}


function add_product_ctrl($is_ajax = false){
	$name = "";
	$price = "";
	$color = "";

	
	if(isset($_POST["name"])){
		$name = $_POST["name"];	
	}
	if(isset($_POST["price"])){
		$price = $_POST["price"];	
	}
	if(isset($_POST["color"])){
		$color = $_POST["color"];	
	}

	$product_obj["name"] = $name;
	$product_obj["price"] = $price;
	$product_obj["color"] = $color;
	
	/*TODO:
	Server Side Validation
	*/
	
	
	$result = add_new_product($product_obj);//inser product to db
	
	if(!$is_ajax){
	
		if( $result == 1){
			redirect("all_products.php?success=New product was added successfully");
		}else
		if( $result == -99){
			//redirect to index.php with alert that db is down; 
			redirect("index.php?error=Internal Error , Call site adminstartor");
		}
	}else{
		echo $result;
	}
	
}

function get_porduct_by_id($id){
	return get_product($id);
}

function get_all_products($limit){
	return get_products($limit);
}

function get_all_products_ajax($limit){
	$products = get_products($limit);
	
 	
	 
  	 
}

function delete_product_by_id_ctrl($id, $is_ajax = false){
	$result = delete_product($id);
	
	if($is_ajax){
		echo $result;
	}else{
		if( $result == 1){
			//redirect to index.php with alert that the user can login 
			redirect("all_products.php?success=Product was removed successfully");
		}else
		if( $result == -99){
			//redirect to index.php with alert that db is down; 
			redirect("index.php?error=Internal Error , Call site adminstartor");
		}		
	}

}


function edit_product_ctrl(){
	$name = "";
	$price = "";
	$color = "";
	$id = "";
	
	if(isset($_POST["name"])){
		$name = $_POST["name"];	
	}
	if(isset($_POST["price"])){
		$price = $_POST["price"];	
	}
	if(isset($_POST["color"])){
		$color = $_POST["color"];	
	}
	if(isset($_POST["id"])){
		$id = $_POST["id"];	
	}
	
	$product_obj["id"] = $id;
	$product_obj["name"] = $name;
	$product_obj["price"] = $price;
	$product_obj["color"] = $color;
		
	$result = edit_product($product_obj);//inser user to db
	
	if( $result == 1){
		//redirect to index.php with alert that the user can login 
		redirect("all_products.php?success=Product was edited successfully");
	}else
	if( $result == -99){
		//redirect to index.php with alert that db is down; 
		redirect("index.php?error=Internal Error , Call site adminstartor");
	}
	
}


function edit_product_ajax_ctrl(){
	$name = "";
	$price = "";
	$color = "";
	$id = "";
	
	if(isset($_POST["name"])){
		$name = $_POST["name"];	
	}
	if(isset($_POST["price"])){
		$price = $_POST["price"];	
	}
	if(isset($_POST["color"])){
		$color = $_POST["color"];	
	}
	if(isset($_POST["id"])){
		$id = $_POST["id"];	
	}
	
	$product_obj["id"] = $id;
	$product_obj["name"] = $name;
	$product_obj["price"] = $price;
	$product_obj["color"] = $color;
		
	$result = edit_product($product_obj);//inser user to db
	
	echo $result;
	die();
	
}

?>