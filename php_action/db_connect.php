<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "gasmark";
$store_url = "http://localhost/gasmark/gasmark/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>