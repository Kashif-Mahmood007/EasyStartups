<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "EasyStartUps";

$conn = mysqli_connect($server, $username, $pass, $database);

if(!$conn){
    die("The Connection is not established due to ". mysqli_connect_error());
}


?>