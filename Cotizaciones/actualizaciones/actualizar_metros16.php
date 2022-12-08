<?php
error_reporting(0);
    require '../conexion.php';

    $metros_16 = $_POST['actualizar_metros16'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_16' WHERE nombre='metros16'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }