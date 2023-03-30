<?php 
//script to connect to the database
session_start();
session_regenerate_id(true);
$serverName = "localhost";
$username = "root";
$password = "";
$database = "discussionforum";
$conn = mysqli_connect($serverName, $username, $password, $database);

// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}
?>