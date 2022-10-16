<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM proveedor WHERE id='$id'";
$query=mysqli_query($conection,$sql);

    if($query){
        Header("Location: listapru.php");
    }
?>