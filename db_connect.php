<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "blogs";

$conn = mysqli_connect($servername, $username, $password , $db);

if(mysqli_connect_errno()){
    die("database connection failed".mysqli_connect_error());
}

?>