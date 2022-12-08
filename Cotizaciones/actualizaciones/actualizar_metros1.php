<?php
error_reporting(0);
    require '../conexion.php';

    $metros_1 = $_POST['actualizar_metros1'];

    $sql5 = "UPDATE calculos SET cantidad = '$metros_1' WHERE nombre='metros1'";
    $resultado5 = $conection->query($sql5);

    if($resultado5){
        Header("Location: ../cimientos.php");
    }