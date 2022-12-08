<?php
error_reporting(0);
    require '../conexion.php';

    $metros_20 = $_POST['actualizar_metros20'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_20' WHERE nombre='metros20'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../boveda.php");
    }