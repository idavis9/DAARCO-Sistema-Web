<?php
error_reporting(0);
    require '../conexion.php';

    $metros_11 = $_POST['actualizar_metros11'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_11' WHERE nombre='metros11'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }