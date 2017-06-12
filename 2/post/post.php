<?php

 
  
 if(isset($_POST['user_name']) && $_POST['user_name'] !=""){
	 
	 
	 if( strlen($_POST['user_name']) > 5 ){
		 
	 }else{
		  echo "Please insert user name at leaset 5 charachters";
		 
	 }
	 
	 
 }else{
	 
	 echo "Please insert user name";
 }

?>