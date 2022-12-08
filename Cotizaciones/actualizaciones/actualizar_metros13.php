<?php
error_reporting(0);
    require '../conexion.php';

    $metros_13 = $_POST['actualizar_metros13'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_13' WHERE nombre='metros13'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }