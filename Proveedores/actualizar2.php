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
    if(empty($_POST['nombre_empresa']) || empty($_POST['descripcion']) || empty($_POST['direccion']) || empty($_POST['telefono_empresa']) || empty($_POST['nombre_vendedor']) || empty($_POST['telefono_vendedor']) || empty($_POST['correo']))
    {
        $alert='<p class="msg-error" style="color: #e65655;">*Todos los campos son obligatorios</p>';

    } else{
        include "conexion.php";
        $id = $_POST['id'];
        $nombreempresa= $_POST['nombre_empresa'];
        $descripcion = $_POST['descripcion'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono_empresa'];
        $nombrevendedor= $_POST['nombre_vendedor'];
        $telefonovendedor = $_POST['telefono_vendedor'];
        $email = $_POST['correo'];

        
            $query_insert = mysqli_query($conection,"UPDATE proveedor SET nombre_empresa='$nombreempresa',descripcion='$descripcion',direccion='$direccion',telefono_empresa='$telefono',nombre_vendedor='$nombrevendedor',telefono_vendedor='$telefonovendedor',correo='$email' WHERE id='$id'");

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

$sql="SELECT * FROM proveedor WHERE id='$id'";
$query=mysqli_query($conection,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-proveedor2.css?v=1.4">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.1">
    <title>Document</title>
</head>
<body>
    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
    <div class="titulo-prov">
            <img src="../img/proveedor.png" alt="">
            <h1>Actualizar Proveedores</h1>
        </div>
    <div class="contenedor">
    <div class="form-register">
            
    <?php echo isset($alert) ? $alert : ''; ?>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                <label for=nombreempresa>Nombre de la Empresa</label>
                <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre de la empresa" value="<?php echo $row['nombre_empresa']  ?>">
                <br>
                <label for=direccion>Descripcion</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">  
                <br>
                <label for=direccion>Direccion</label>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">  
                <br>
                <label for=telefono>Telefono</label>
                <input type="number" class="form-control" name="telefono_empresa" placeholder="Telefono de la empresa" value="<?php echo $row['telefono_empresa']  ?>">
                <br>
                <label for=nombrevendedor>Nombre del vendedor</label>
                <input type="text" class="form-control" name="nombre_vendedor" placeholder="Nombre del vendedor" value="<?php echo $row['nombre_vendedor']  ?>">
                <br>
                <label for=telefonovendedor>Telefono del Vendedor</label>
                <input type="number" class="form-control" name="telefono_vendedor" placeholder="Telefono del vendedor" value="<?php echo $row['telefono_vendedor']  ?>">
                <br>
                <label for=email>Email</label>
                <input type="text" class="form-control" name="correo" placeholder="Email" value="<?php echo $row['correo']  ?>">  
                <br>

                <div class="boton-añadir">
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                    <a href="listapru.php" class="btn btn-dark">Regresar</a>
                 </div>
        </form>
        </div>
        </div>
    </section>
</body>
</html>