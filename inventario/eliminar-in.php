<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM inventario WHERE id='$id'";
$query=mysqli_query($conection,$sql);

    if($query){
        Header("Location: lista.php");
    }
?>