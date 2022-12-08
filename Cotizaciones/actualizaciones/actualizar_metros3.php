<?php
error_reporting(0);
    require '../conexion.php';

    $metros_3 = $_POST['actualizar_metros3'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_3' WHERE nombre='metros3'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }