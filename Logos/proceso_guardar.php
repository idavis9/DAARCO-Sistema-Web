<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Registro-login/login.php");
    exit;
}
?>

<?php

include("conexion.php");

$username = htmlspecialchars($_SESSION["username"]);
$cargarlogo=($_FILES['logo']['tmp_name']);
$logo=fopen($cargarlogo, 'rb');

$insertar=$conection->prepare("INSERT INTO logos(logo, usuario) VALUES (:logo, :usuario)");
$insertar->bindParam(':logo', $logo, PDO::PARAM_LOB);
$insertar->bindParam(':usuario', $username, PDO::PARAM_STR);
$insertar->execute();

if($insertar){
    echo "Si se inserto";
}
else{
    echo "Valiste madre";
}


?>