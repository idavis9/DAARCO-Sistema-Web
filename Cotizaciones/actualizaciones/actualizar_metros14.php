<?php
error_reporting(0);
    require '../conexion.php';

    $metros_14 = $_POST['actualizar_metros14'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_14' WHERE nombre='metros14'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../muros.php");
    }