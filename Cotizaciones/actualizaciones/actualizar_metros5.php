<?php
error_reporting(0);
    require '../conexion.php';

    $metros_5 = $_POST['actualizar_metros5'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_5' WHERE nombre='metros5'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }