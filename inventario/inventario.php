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

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['concepto']) || empty($_POST['precio']) || empty($_POST['cantidad']) || empty($_POST['unidad']) || empty($_POST['descripcion']))
    {
        $alert='<p class="msg-error" style="color: #e65655;">*Todos los campos son obligatorios</p>';

    } else{
        include "conexion.php";
        $concepto= $_POST['concepto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
     /*   $multi = $precio * $cantidad;
        $total = $multi; */
        $unidad= $_POST['unidad'];
        $descripcion = $_POST['descripcion'];
        $username = htmlspecialchars($_SESSION["username"]);

            $query_insert = mysqli_query($conection,"INSERT INTO inventario(concepto,precio,cantidad,unidad,descripcion,usuario)VALUES('$concepto','$precio','$cantidad','$unidad','$descripcion','$username')");

            if($query_insert){
                $alert='<p class="msg-save" style="color: #126e00;">Inventario añadido exitosamente.</p>';
            }else{
                $alert='<p class="msg-error" style="color: #e65655;">Error al añadir al inventario</p>';
            }
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-inventario.css?v=1.1">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <title>Document</title>
</head>
<body style="background-color: #e0e0e0">
    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
    <div class="titulo-prov">
            <img src="../img/inventario.png" alt="">
            <h1>Añadir Inventario</h1>
        </div>
    <div class="contenedor">
    <div class="form-register">
            
    <?php echo isset($alert) ? $alert : ''; ?>
        <form action="" method="post">
                <label for=concepto>Concepto</label>
                <input type="text" name="concepto" class="form-control" placeholder="Concepto">
                <br>
                <label for=precio>Precio</label>
                <input type="number" name="precio" class="form-control" placeholder="Precio" step="0.1">
                <br>
                <label for=cantidad>Cantidad</label>
                <input type="number" name="cantidad" class="form-control" placeholder="Cantidad">  
                <br>
                <label for=cantidad>Unidad</label>
                <select input type="text" name="unidad" class="form-select" placeholder="Unidad">
                    <option>Hora</option>
                    <option>Camion</option>
                    <option>Kilo</option>
                    <option>Saco</option>
                    <option>Metro</option>
                    <option>Pieza</option>
                    <option>Litro</option>
                    <option>Galon</option>

                </select>
                <br>
                <label for=descripcion>Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion"> 
                <br>

                <div class="boton-añadir">
                    <button type="submit" class="btn btn-dark">+ Añadir</button>
                    <a href="lista.php" class="btn btn-dark">Regresar</a>
                 </div>
        </form>
        </div>
        </div>
    </section>
</body>
</html>