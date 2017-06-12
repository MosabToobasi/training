<?php

$file = fopen("products.txt", "r") or die("Could not open the fie");

//$fils_content = fread($file, filesize("products.txt"));

//echo $fils_content;


/*while(!feof($file)){
	echo fgets($file);
	echo "<br>";
}*/

/*while(!feof($file)){
	echo fgetc($file);
	echo "<br>";
}*/

/*Read from http*/

$urlfile = file_get_contents("http://www.dogsandcats101.com/steps-healthy-cat/");


echo strip_tags($urlfile);

//fclose($file);

?>