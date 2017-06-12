<html>
	<head>
	
	
	</head>
	<body>

	Welcome, <b><i><?php 
	
	echo "Hello world!";
	print "<br><br> Hi All,";
	
	$var = "first var";
	$int = 5;
	echo "<br><br>";
	echo $int + 6 ;
	
	echo "<br><br>".$var;
	ECHO "<br><br>".$var;
	
	//comments
	
	/*
	
	multi line
	
	*/
	
	
	if($int > 0){
		echo "<br><br> It is Postive <br>";
	}
	
	for($i = 0; $i<10; $i++){
		echo "<br>".$i;
	}
	
	echo "<br><br>";
	
	$j = 0;
	while($j < 5){
		
		echo "<br>".$j++;
	}
	
	function myecho( $data ){
		echo "<br><br>*".$data;
	}
	myecho("PHP");
	
	
	function myvar( $data ){
		
		return "<br><br>*".$data;
	}
	echo myvar("PHP");
	
	echo "<br><br>";
	function print_static(){
		static $svar = 0;
		$svar++; 
		echo $svar;
		echo "<br><br>";
	}
	print_static();
	print_static();
	print_static();
	
 	
	
	$persons = array("Zeiad","Noor","Dana");
	foreach($persons as $person){
		myecho($person);
	}
	echo "<br><br>";
	
	
	
	print_r($persons);
	
	$cars = array("car1"=>"BMW", "car2"=>"Ford", "car3" => "A");
	
	echo "<br><br>";
	print_r($cars);
	asort($cars);
	print_r($cars);
	echo "<br><br>";
	
	echo $cars["car1"];
	
	echo "<br>...........................<br>";
	
	foreach($cars as $car){
		myecho($car);
 	}
	
	foreach($cars as $key=>$val){
		myecho($key);
		myecho($val);
	}
	
	echo str_repeat("Traing",10);
	
	$str = "Welcome, USER";
	echo "<br><br>";
	echo str_replace("USER", "Yara", $str);
	 
	
	echo "<br><br>";
	print_r($_GET);
	
	echo "<br><br>";
	
	if(isset($_GET['name'])){
		echo $_GET['name'];
	}
	
	echo "<br><br>";
	print_r($_POST);
	
	echo "<br><br><br><br><br><br><br><br><br><br>";
	
	include("subfile.php");
	require("post/post.php");
	//require_once("subfile.php");
	
	
	
	echo "<br><br><br><br><br><br><br><br><br><br>";
	?></i></b>
	
	
	</body>
</html>



