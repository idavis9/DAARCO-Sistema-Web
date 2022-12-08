<?php
error_reporting(0);
    require '../conexion.php';

    $metros_6 = $_POST['actualizar_metros6'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_6' WHERE nombre='metros6'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }