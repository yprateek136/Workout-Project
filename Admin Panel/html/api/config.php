<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=ISO-8859-1');*/
date_default_timezone_set('Asia/Kolkata');

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root123';
$dbname = 'admindb';

 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 if ($conn->connect_error) {
	die("401"); 
 }
 $api_key = "108045B4BAF2D77655BD7D68F5D5B0C1";

mysqli_set_charset($conn, "utf8");
?>


