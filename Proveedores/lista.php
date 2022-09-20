<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Registro-login/login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-proveedor.css">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css">
    <title>Document</title>
</head>

<body>

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <h1>Lista de Proveedores</h1>
        <a href="proveedor.php" class="btn_new"> Crear Proveedor</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre de la Empresa</th>
                <th>Direccion</th>   
                <th>Telefono</th>
                <th>Nombre del Vendedor</th>
                <th>Telefono del Vendedor</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>  
            
        <?php
            include "conexion.php";
            $username = htmlspecialchars($_SESSION["username"]);
            $query = mysqli_query($conection,"SELECT id, nombre_empresa, direccion, telefono_empresa, nombre_vendedor, telefono_vendedor, correo FROM proveedor WHERE usuario = '$username'");

            $result = mysqli_num_rows($query);
            if($result > 0){
                while ($data = mysqli_fetch_array($query)) {
            
            ?>
                <tr>
                    <td><?php echo $data["id"]; ?></td>
                    <td><?php echo $data["nombre_empresa"]; ?></td>
                    <td><?php echo $data["direccion"]; ?></td>
                    <td><?php echo $data["telefono_empresa"]; ?></td>
                    <td><?php echo $data["nombre_vendedor"]; ?></td>
                    <td><?php echo $data["telefono_vendedor"]; ?></td>
                    <td><?php echo $data["correo"]; ?></td>
                    <td>
                    <a class="link_edit" href="editar_provedor.php?id=<?php echo $data["id"];?>">Editar</a>
                    <a class="link_delete" href="#">Eliminar</a>
                    </td>
                </tr>
        <?php
                }
            }
                ?>        
        </table>
           
    </section>
    
</body>
</html>
