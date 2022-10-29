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
        $nombreempresa= $_POST['nombre_empresa'];
        $descripcion = $_POST['descripcion'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono_empresa'];
        $nombrevendedor= $_POST['nombre_vendedor'];
        $telefonovendedor = $_POST['telefono_vendedor'];
        $email = $_POST['correo'];
        $username = htmlspecialchars($_SESSION["username"]);

        $query = mysqli_query($conection,"SELECT * FROM proveedor WHERE nombre_empresa = '$nombreempresa' OR correo = '$email'");
        $result = mysqli_fetch_array($query);

        if($result > 0){
            $alert='<p class="msg-error" style="color: #e65655;">El nombre de la Empresa o el Correo ya exixten</p>';

        }else{
            $query_insert = mysqli_query($conection,"INSERT INTO proveedor(nombre_empresa,descripcion,direccion,telefono_empresa,nombre_vendedor,telefono_vendedor,correo,usuario)VALUES('$nombreempresa','$descripcion','$direccion','$telefono','$nombrevendedor','$telefonovendedor','$email','$username')");

            if($query_insert){
                $alert='<p class="msg-save" style="color: #126e00;">Proveedor creado exitosamente.</p>';
            }else{
                $alert='<p class="msg-error" style="color: #e65655;">Error al crear el Proveedor</p>';
            }
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
            <img src="../img/proveedor2.png" alt="">
            <h1>Añadir Proveedores</h1>
        </div>
    <div class="contenedor">
    <div class="form-register">
            
    <?php echo isset($alert) ? $alert : ''; ?>
        <form action="" method="post">
                <label for=nombreempresa>Nombre de la Empresa</label>
                <input type="text" name="nombre_empresa" class="form-control" placeholder="Nombre de la Empresa">
                <br>
                <label for=nombreempresa>Descripcion de la Empresa</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
                <br>
                <label for=direccion>Direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion">  
                <br>
                <label for=telefono>Telefono</label>
                <input type="number" name="telefono_empresa" class="form-control" placeholder="Telefono">
                <br>
                <label for=nombrevendedor>Nombre del vendedor</label>
                <input type="text" name="nombre_vendedor" class="form-control" placeholder="Nombre del Vendedor"> 
                <br>
                <label for=telefonovendedor>Telefono del Vendedor</label>
                <input type="number" name="telefono_vendedor" class="form-control" placeholder="Telefono del Vendedor">
                <br>
                <label for=email>Email</label>
                <input type="text" name="correo" class="form-control" placeholder="Email">
                <br>

                <div class="boton-añadir">
                    <button type="submit" class="btn btn-dark">+ Añadir</button>
                    <a href="listapru.php" class="btn btn-dark">Regresar</a>
                 </div>
        </form>
        </div>
        </div>
    </section>
</body>
</html>
