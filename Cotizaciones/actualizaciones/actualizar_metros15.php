<?php
error_reporting(0);
    require '../conexion.php';

    $metros_15 = $_POST['actualizar_metros15'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_15' WHERE nombre='metros15'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }