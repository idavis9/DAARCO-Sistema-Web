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
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <link rel="stylesheet" href="style-proyectos.css?v=1.7">
    <title>Document</title>
</head>
<body style="background-color: #e0e0e0">
    
    <?php
        include_once '../Panel-bar/index.php';
    ?>
   
   <div class="contenedor1">
    <div class="Titulo">
    <img src="../img/guardar2.png" alt="">
        <h1>
            Gestiona tus proyectos aquí:
        </h1>
        </div>
   </div>

   <div class="contenedor2">
   <div class="botones">
   <button>
        <a href="https://www.dropbox.com/login"><img src="../img/dropbox.png" alt="">
         Dropbox
         </a>
    </button>

    <button>
        <a href="https://www.google.com/intl/es/drive/"><img src="../img/google-drive.png" alt="">
         google drive
         </a>
    </button>

    <button>
        <a href="https://office.live.com/start/OneDrive.aspx?omkt=es-ES"><img src="../img/onedrive.png" alt="">
         onedrive
         </a>
    </button>
    </div>
    </div>
   



</body>
</html>