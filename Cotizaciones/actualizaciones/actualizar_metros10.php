<?php
error_reporting(0);
    require '../conexion.php';

    $metros_10 = $_POST['actualizar_metros10'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_10' WHERE nombre='metros10'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }