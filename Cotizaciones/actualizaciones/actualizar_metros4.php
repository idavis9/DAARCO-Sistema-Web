<?php
error_reporting(0);
    require '../conexion.php';

    $metros_4 = $_POST['actualizar_metros4'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_4' WHERE nombre='metros4'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }