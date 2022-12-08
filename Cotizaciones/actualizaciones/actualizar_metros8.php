<?php
error_reporting(0);
    require '../conexion.php';

    $metros_8 = $_POST['actualizar_metros8'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_8' WHERE nombre='metros8'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }