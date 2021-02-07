<?php
include 'config.php';

$data = array();

$received_api_key = $_REQUEST['apiKey'];
$api_file = $_REQUEST['api'];

if($received_api_key == $api_key) {
	if (file_exists($api_file . '.php')) {
		include $api_file . '.php';
	} else {
		$data['status'] = '402';
		$data['message'] = 'Please Provide Correct API';
	}
} else {
	$data['status'] = '401';
	$data['message'] = 'Please Provide Correct API KEY';
}

// set_error_handler("customError");
// function customError($errno, $errstr) {
// 	$data['err'] = "<b>Error:</b> [$errno] $errstr<br>";
// 	die();
// }
echo json_encode($data);
