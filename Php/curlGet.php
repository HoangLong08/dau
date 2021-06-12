<?php 

function callApi($url) {
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_URL => $url,
		CURLOPT_SSL_VERIFYPEER => false
	));

	$resp = curl_exec($ch);
	curl_close($ch);
	$decode = json_decode($resp, true);

	return $decode;
}
?>