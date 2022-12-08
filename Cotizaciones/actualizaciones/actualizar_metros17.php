<?php
error_reporting(0);
    require '../conexion.php';

    $metros_17 = $_POST['actualizar_metros17'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_17' WHERE nombre='metros17'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../boveda.php");
    }