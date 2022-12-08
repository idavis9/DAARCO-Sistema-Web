<?php
error_reporting(0);
    require '../conexion.php';

    $metros_18 = $_POST['actualizar_metros18'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_18' WHERE nombre='metros18'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../boveda.php");
    }