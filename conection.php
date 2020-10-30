<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "website";

$con = mysqli_connect($server, $user, $password, $database);

if(!$con){
    echo "erro".mysqli_connect_error();
}

?>
