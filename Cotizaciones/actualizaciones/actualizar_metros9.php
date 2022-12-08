<?php
error_reporting(0);
    require '../conexion.php';

    $metros_9 = $_POST['actualizar_metros9'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_9' WHERE nombre='metros9'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }