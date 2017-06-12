<?php
function call($method, $url, $data = false) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	curl_setopt($ch, CURLOPT_URL, $url);
	if ($data) {
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Content-Length: ' . strlen($data);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return curl_exec($ch);
}
/*$response = call('GET', 
'http://localhost/training/php-api/api.php/product_tbl/39');
$jsonObject = json_decode($response, true);

$object = array('name'=>'from client','price'=>1,'color'=>'red');
call('POST', 'http://localhost/training/php-api/api.php/product_tbl/'
,json_encode($object));


$object = array('name'=>'update from client','price'=>1000,'color'=>'red');
call('PUT', 'http://localhost/training/php-api/api.php/product_tbl/32'
,json_encode($object));*/
*/

$response = call('GET', 'http://api.openweathermap.org/data/2.5/weather?id='.$_GET['id'].'&units=metric&APPID=2f8796eefe67558dc205b09dd336d022');
?>
<html>
<head>
</head>
<body>
<pre><?php 

$weather = json_decode($response, true);


//print_r( $weather);

 ?></pre>
<?php
 echo "<img src='http://openweathermap.org/img/w/" . $weather['weather'][0]['icon'] .".png'/ >"; 
?>
<p>Weather in <?php echo $weather['name'];?></p> 
<p>Min temp: <?php echo $weather['main']['temp_min'];?></p> 
<p>Max temp: <?php echo $weather['main']['temp_max'];?></p> 
</body>
</html>

