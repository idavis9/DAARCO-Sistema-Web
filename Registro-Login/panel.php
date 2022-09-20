<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css">
    <title>Document</title>
</head>
<body>

    <?php
        include_once '../Panel-bar/index.php';
    ?>


    <div class="page-header">
        <h1>Hola, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Bienvenid@ a nuestro sitio.</h1>
            
    </div>

    <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
    <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
    
</body>
</html>
