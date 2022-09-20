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
    if(empty($_POST['nombre_empresa']) || empty($_POST['direccion']) || empty($_POST['telefono_empresa']) || empty($_POST['nombre_vendedor']) || empty($_POST['telefono_vendedor']) || empty($_POST['correo']))
    {
        $alert='<p class="msg-error">Todos los campos son obligatorios</p>';

    } else{
        include "conexion.php";
        $nombreempresa= $_POST['nombre_empresa'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono_empresa'];
        $nombrevendedor= $_POST['nombre_vendedor'];
        $telefonovendedor = $_POST['telefono_vendedor'];
        $email = $_POST['correo'];
        $username = htmlspecialchars($_SESSION["username"]);

        $query = mysqli_query($conection,"SELECT * FROM proveedor WHERE nombre_empresa = '$nombreempresa' OR correo = '$email'");
        $result = mysqli_fetch_array($query);

        if($result > 0){
            $alert='<p class="msg-error">El nombre de la Empresa o el Correo ya exixten</p>';

        }else{
            $query_insert = mysqli_query($conection,"INSERT INTO proveedor(nombre_empresa,direccion,telefono_empresa,nombre_vendedor,telefono_vendedor,correo,usuario)VALUES('$nombreempresa','$direccion','$telefono','$nombrevendedor','$telefonovendedor','$email','$username')");

            if($query_insert){
                $alert='<p class="msg-save">Proveedor creado exitosamente.</p>';
            }else{
                $alert='<p class="msg-error">Error al crear el Proveedor</p>';
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
    <link rel="stylesheet" href="style-proveedor.css">
    <title>Document</title>
</head>
<body>
    <h1>Proveedores</h1>
    <br>
    <section id="container">
    <div class="form-register">
            <h1>Agregar Provedores</h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
        <form action="" method="post">
                <br>
                <label for=nombreempresa>Nombre de la Empresa</label>
                <input type="text" name="nombre_empresa" class="form-control" placeholder="Nombre de la Empresa">
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
                <label for=email>email</label>
                <input type="text" name="correo" class="form-control" placeholder="email">
        
            <br>
            <button type="submit" class="btn-save">Agregar</button>
        </form>
        </div>
    </section>
</body>
</html>
