<?php 	

$localhost = "localhost";
$username = "root";
$password = "Ho1hai*ha";
$dbname = "store"; 
$store_url = "http://127.0.0.1/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname,3306);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?> 

