<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = "training";

$conn = new mysqli($servername, $username, $password, $name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//insert
$sql = "INSERT INTO data (data) VALUES ('".time()."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$prepare = $conn->prepare("INSERT INTO data (data) VALUES (?)");
$prepare->bind_param('s',time());
$prepare->execute();

$prepare->close();


//select
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>data: " . $row["data"];
    }
} else {
    echo "0 results";
}

//delete
$sql = "DELETE FROM data WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


//update
$sql = "UPDATE data SET data = 'done' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>