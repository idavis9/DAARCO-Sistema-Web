<?php
error_reporting(0);
    require '../conexion.php';

    $piezas_2 = $_POST['actualizar_piezas2'];

    $sql5 = "UPDATE calculos SET cantidad = '$piezas_2' WHERE nombre='piezas2'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }