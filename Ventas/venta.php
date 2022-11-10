<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Registro-login/login.php");
    exit;
}
?>


<?php

if(($_POST))
{
 
    require '../Proveedores/conexion.php';
    $sql2 = "SELECT * FROM inventario";
    $resultado2 = $conection->query($sql2);
    $num_rows = $resultado2->num_rows;
    
    if ($num_rows > 0) {
        while ($row = $resultado2->fetch_assoc()) {
           $concepto = $row["concepto"];
           $precio = $row["precio"];
           $producto = $_POST['producto'];

            if($producto == $concepto){
                $array = [$precio];
                } 
                }  
    } else {
        
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <link rel="stylesheet" href="../Proveedores/style-proveedor2.css?v=2.1">
    <link rel="stylesheet" href="style-venta.css?v=1.2">
    <title>Document</title>
</head>
<body style="background-color: #e0e0e0">

    <?php
        include_once '../Panel-bar/index.php';
    ?>

<section id="container">
        <div class="titulo-prov">
            <img src="../img/agregar-carrito.png" alt="" style="width: auto; height: 80px;">
            <h1>Ventas</h1>
        </div>
        <div class="boton-crear">
        <a href="proveedor.php" class="btn btn-dark">Reporte de ventas</a>
        </div>

        <div class="datos-campo">
                <div class="datos-cliente">
                    <form action="#" method="post">
                    <p>Folio</p>
                    <input type="text" name="folio" id="folio" class="form-control">
                    <p>Cliente</p>
                    <input type="text" name="cliente" id="cliente" class="form-control">
                    <p>Dirección</p>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                    <p>Telefono</p>
                    <input type="number" name="telefono" id="telefono" class="form-control">
                    <p>Producto</p>
                    <input type="text" name="producto" id="producto" class="form-control">
                    <button type="submit" class="btn btn-dark">+ Añadir</button>
                    </form>
                </div>
        </div>
        <br>

        <table class="table table-dark table-striped-columns">
            
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>   
                <th>Precio Unitario</th>
                <th>Importe</th>
                <th>Quitar</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
             <tbody id="content">
            <?php
             foreach($array as $elementos){
                    echo $tabla = '<thead> ';
                    echo $tabla = ' <th>Id</th>';
                    echo $tabla = '</thead> ';
                      echo $elementos;
                   }
            ?>

            </tbody>
            </table>
    </section>


    
</body>
</html>