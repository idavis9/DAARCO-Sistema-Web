<?php
error_reporting(0);
    require '../conexion.php';

    $metros_19 = $_POST['actualizar_metros19'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_19' WHERE nombre='metros19'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../boveda.php");
    }