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


$response = call('GET', 'http://apilayer.net/api/live?access_key=e2d8a9e709d4959b7893be9ced9657af');
$currency = json_decode($response, true);
?>
<html>
<head>
</head>
<body>
<pre><?php 


// print_r($currency);
 ?></pre>
  From USD to ILS <?php echo $currency['quotes']['USDILS'];?>
</body>
</html>

