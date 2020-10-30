<?php

session_start();

$server = "localhost";
$user = "root";
$password = "";
$database = "website";

$con = mysqli_connect($server, $user, $password, $database);

if(!$con){
    echo "erro".mysqli_connect_error();
}

$name = $_GET["name"];
$email = $_GET["email"];
$address = $_GET["address"];
$telephone = $_GET["telephone"];
$church = $_GET["church"];
$submit = $_GET["submit"];

$nameModify = ucfirst(strtolower($name));
$emailModify = strtolower($email);
$addressModify = ucfirst(strtolower($address));
$churchModify = ucfirst(strtolower($church));

if(isset($submit)){

    if(empty($email) || empty($name) || empty($address) || empty($telephone)){
        $_SESSION["msg"] = "Preencha os dados acima!";
        header("Location: ../index.php");
    }else{
        $insert = "INSERT INTO participantes VALUES ";
        $insert .= "(default,'$nameModify','$emailModify','$addressModify','$telephone','$churchModify')";
        mysqli_query($con, $insert);
        $_SESSION["msg"] = "Inscrição feita!";
        header("Location: ../index.php");
        mysqli_close($con);
    }

}

?>
