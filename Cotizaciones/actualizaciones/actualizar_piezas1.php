<?php
error_reporting(0);
    require '../conexion.php';

    $piezas_1 = $_POST['actualizar_piezas1'];

    $sql5 = "UPDATE calculos SET cantidad = '$piezas_1' WHERE nombre='piezas1'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }