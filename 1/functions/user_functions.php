<?php

function new_user_ctrl(){
	$email = "";
	$password = "";
	$repassword = "";
	$fullname = "";
	if(isset($_POST["email"])){
		$email = $_POST["email"];	
	}
	if(isset($_POST["password"])){
		$password = $_POST["password"];	
	}
	if(isset($_POST["repassword"])){
		$repassword = $_POST["repassword"];	
	}
	if(isset($_POST["fullname"])){
		$fullname = $_POST["fullname"];	
	}
	
	//Cheack if password are same
	if($password == $repassword && $password !="" ){
		
		//Call model function for add new user to db;
		$user_obj["email"] = $email;
		$user_obj["password"] = $password;
		$user_obj["repassword"] = $repassword;
		$user_obj["fullname"] = $fullname;
		
		//must check if user email exist 
		
		if(!is_email_exsit($email)){
			$result = add_new_user($user_obj);//inser user to db
			/*
			varfiy user // send user welcome message
			*/
		}else{
			redirect("register.php?error=User alraedy exist");
		}
		
		 
		
		
		
		
		if( $result == 1){
			//redirect to index.php with alert that the user can login 
			redirect("index.php?success=Welcome, you can login using your account");
		}else
		if( $result == -99){
			//redirect to index.php with alert that db is down; 
			redirect("index.php?error=Internal Error , Call site adminstartor");
		}
	}else{
		//redirect to register.php with alert password does not match
		redirect("register.php?error=Passwords does not match");
	}
}


function check_login(){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(get_user_by_email_password($email, $password ) != null ){
		
		$_SESSION["id"] = 1;
		$_SESSION["fullname"] = "Zeiad Habbab";
		redirect('myaccount.php?sccuess=Login Success');
		
	}else{
		redirect('index.php?error=Login Faild');		
	}
}

function send_mail($to,$username, $subject, $messag){
$transport = Swift_SmtpTransport::
newInstance('in-v3.mailjet.com', 587)
    ->setUsername('4eab6edd1b79e426c25f942304321948') // Your Gmail Username
    ->setPassword('04d330d932e68296535294cac95d0ac9'); // Your Gmail Password
	
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subject)
    ->setFrom(array('zeiad.habbab@live.com' => 'Zeiad')) // can be $_POST['email'] etc...
    ->setTo(array($to => $username)) // your email / multiple supported.
    ->setBody($messag, 'text/html');

// Send the message
if ($mailer->send($message)) {
    return true;
} else {
    return false;
}
	
}

?>