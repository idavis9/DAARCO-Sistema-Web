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
        $id = $_POST['id'];
        $concepto= $_POST['concepto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        /*   $multi = $precio * $cantidad;
        $total = $multi; */
        $unidad= $_POST['unidad'];
        $descripcion = $_POST['descripcion'];
        $username = htmlspecialchars($_SESSION["username"]);

        
            $query_insert = mysqli_query($conection,"UPDATE inventario SET concepto='$concepto',precio='$precio',cantidad='$cantidad',unidad='$unidad',descripcion='$descripcion' WHERE id='$id'");

            if($query_insert){
                $alert='<p class="msg-save" style="color: #126e00;">Proveedor actualizado exitosamente.</p>';
            }else{
                $alert='<p class="msg-error" style="color: #e65655;">Error al actualizar el Proveedor</p>';
            }
        }
        
    }


?>

<?php 

include("conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM inventario WHERE id='$id'";
$query=mysqli_query($conection,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-inventario.css?v=1.4">
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
            <h1>Actualizar Inventario</h1>
        </div>
    <div class="contenedor">
    <div class="form-register">
            
    <?php echo isset($alert) ? $alert : ''; ?>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                <label for=concepto>Concepto</label>
                <input type="text" class="form-control" name="concepto" placeholder="Concepto" value="<?php echo $row['concepto']  ?>">
                <br>
                <label for=precio>Precio</label>
                <input type="number" class="form-control" name="precio" placeholder="Precio" step="0.1" value="<?php echo $row['precio']  ?>">  
                <br>
                <label for=cantidad>Cantidad</label>
                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']  ?>">  
                <br>
                <label for=cantidad>Unidad</label>
                <select type="text" name="unidad" class="form-select" placeholder="Unidad">
                    <option value="<?php echo $row['unidad'] ?>"><?php echo $row['unidad']  ?></option>
                    <option value="Hora">Hora</option>
                    <option value="Camion">Camion</option>
                    <option value="Kilo">Kilo</option>
                    <option value="Saco">Saco</option>
                    <option value="Metro">Metro</option>
                    <option value="Pieza">Pieza</option>
                    <option value="Litro">Litro</option>
                    <option value="Galon">Galon</option>

                </select>
                <br>
                <label for=descripcion>Descripcion</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">
                <br>
                <div class="boton-añadir">
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                    <a href="lista.php" class="btn btn-dark">Regresar</a>
                 </div>
        </form>
        </div>
        </div>
    </section>
</body>
</html>