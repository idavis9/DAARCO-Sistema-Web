<?php
error_reporting(0);
    require '../conexion.php';

    $metros_12 = $_POST['actualizar_metros12'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_12' WHERE nombre='metros12'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }