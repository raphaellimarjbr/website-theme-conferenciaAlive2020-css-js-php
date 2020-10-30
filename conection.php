<?php

$server = "localhost";
$user = "id14122282_raphael";
$password = "r11072019R#*";
$database = "id14122282_website";

$con = mysqli_connect($server, $user, $password, $database);

if(!$con){
    echo "erro".mysqli_connect_error();
}

?>