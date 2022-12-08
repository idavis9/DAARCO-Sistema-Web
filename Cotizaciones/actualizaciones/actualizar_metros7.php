<?php
error_reporting(0);
    require '../conexion.php';

    $metros_7 = $_POST['actualizar_metros7'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_7' WHERE nombre='metros7'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }