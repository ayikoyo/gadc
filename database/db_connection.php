<?php
$GLOBALS['conn'] = "";
$server = "localhost";
 $username = "root";
 $password ="";
 $database = "pickanddrop_db";
//$username = "root";
//$password ="";
//$database = "pickup_db";
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
	die('Connection failed: '.$conn->connect_error);
}
?>