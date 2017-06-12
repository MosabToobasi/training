<?php

$file = fopen("new_products.txt", "w") or die("Could not open the fie");

$text = "We have new product";

fwrite($file,$text);

fclose($file);

?>