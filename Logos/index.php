<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Registro-login/login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.1">
    <title>Document</title>
</head>
<body>

    <?php
        include_once '../Panel-bar/index.php';
    ?>


    <p>Sube tu logotipo aqui:</p>


    <div class="">
        <label>Logotipo</label>
        <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="logo" class="form-control" style="font-size: 16px;">
        <input type="submit" value="Aceptar">
    </div> <br>
</body>
</html>