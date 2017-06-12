<?php
	//Database information
	$server = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "training";
	
	$conn = new mysqli($server, $dbuser, $dbpass, $dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		echo "it is connected";
	}
	
	$data = "string";
	
	//$sql = "insert into data (id,data) values (null, ".$data." ) ";
	//$sql = "delete from data where id = 1";
	
	/*$prepare = $conn->prepare("INSERT INTO data (data) VALUES (?)");
	$prepare->bind_param('s',$data);
	if($prepare->execute() === True){
		echo "Data Added Successfully";
		echo "<br>". $conn->insert_id;
	}else{
		echo $conn->error;
	}
	
	$prepare->close();*/
	
	
	//select
	$sql = "SELECT * FROM data";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br>data: " . $row["data"] ." Id:".$row["id"];
		}
	} else {
		echo "0 results";
	}
	
	
	
	
	
	
	
	
	
	
?>