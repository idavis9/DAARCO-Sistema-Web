<?php
error_reporting(0);
    require '../conexion.php';

    $metros_2 = $_POST['actualizar_metros2'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_2' WHERE nombre='metros2'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }