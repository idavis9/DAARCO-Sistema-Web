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
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.5">
    <link rel="stylesheet" href="style-login2.css?v=1.6">
    <title>Document</title>
</head>
<body>
    <div class="panel-cont">
    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <div class="sub-panel">
    <div class="card" style="background-color: rgba(255, 255, 255, 0);">
        <div class="img">
            <img src="../img/DAARCO5.png" alt="">
        </div>

        <div class="info">
            <span><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
        </div>
        <div class="info">
            <p>Bienvenid@</p>
        </div>
    </div>
    </div>

    </div>
    
</body>
</html>
