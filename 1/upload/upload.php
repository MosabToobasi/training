<?php

$folder = "files/";
//$name = $_FILES["cvfile"]["name"];

$filepath = $_FILES["cvfile"]["tmp_name"];
$file_dest = $folder.time().basename($_FILES["cvfile"]["name"]);

echo ($file_dest );

if( file_exists($file_dest ) ){
	echo "file is exist";
}




move_uploaded_file($filepath , $file_dest);

?>