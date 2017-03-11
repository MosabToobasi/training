<?php
session_start();



function sign_out(){
	session_destroy();
	redirect('index.php');
}

function is_user_login(){
	if(!isset($_SESSION['id'])){
		redirect('index.php?error=Session time out');
	}
}

function check_user_login(){
	if(isset($_SESSION['id'])){
		return true;
	}else{
		return false;
	}
}

function redirect($url){
	header('Location: '.$url, true,'302');
	exit();
}




 
?>