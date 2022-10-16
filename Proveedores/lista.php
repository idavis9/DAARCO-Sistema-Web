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
    <link rel="stylesheet" href="style-proveedor2.css?v=1.3">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.1">
    <title>Document</title>
</head>

<script type="text/javascript">
    function ConfirmDelete()
    {
        var respuesta = confirm("¿Estas seguro que deseas Eliminar al proveedor?");
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
    }

</script>



<body>

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <div class="titulo-prov">
            <img src="../img/proveedor.png" alt="" style="width: auto; height: 60px;">
            <h1>Proveedores</h1>
        </div>
        <div class="boton-crear">
        <a href="proveedor.php" class="btn btn-dark">Añadir Proveedor +</a>
        </div>
        <table class="table table-dark table-striped-columns">
            <tr>
             <!--<th>Id</th> -->
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

            /*=======paginador======= */
            $sql_register = mysqli_query($conection,"SELECT COUNT(*) AS total_registro FROM proveedor WHERE usuario = '$username'");
            $result_register = mysqli_fetch_array($sql_register);
            $total_registro = $result_register['total_registro'];

            $por_pagina = 20;
            if(empty($_GET['pagina']))
            {
                $pagina = 1;
            }else{
                $pagina = $_GET['pagina'];
            }
            $desde = ($pagina-1) * $por_pagina;
            $total_paginas = ceil($total_registro / $por_pagina);

            /*=======listar======= */
            $username = htmlspecialchars($_SESSION["username"]);
            $query = mysqli_query($conection,"SELECT id, nombre_empresa, direccion, telefono_empresa, nombre_vendedor, telefono_vendedor, correo FROM proveedor WHERE usuario = '$username' LIMIT $desde,$por_pagina");

            $result = mysqli_num_rows($query);
            if($result > 0){
                while ($data = mysqli_fetch_array($query)) {
            
            ?>
                <tr>
                <!--<td><?php echo $data["id"]; ?></td> -->
                    <td><?php echo $data["nombre_empresa"]; ?></td>
                    <td><?php echo $data["direccion"]; ?></td>
                    <td><?php echo $data["telefono_empresa"]; ?></td>
                    <td><?php echo $data["nombre_vendedor"]; ?></td>
                    <td><?php echo $data["telefono_vendedor"]; ?></td>
                    <td><?php echo $data["correo"]; ?></td>
                    <td>
                    <a class="btn btn-success" href="actualizar2.php?id=<?php echo $data["id"];?>">Editar</a>
                    <a class="btn btn-danger" href="eliminar.php?id=<?php echo $data["id"];?>" onclick="return ConfirmDelete()">Eliminar</a>
                    </td>
                </tr>
        <?php
                }
            }
                ?>        
        </table>

        <div class="paginador">
            <ul>
                <?php
                if($pagina !=1)
                {
                ?>
                <li><a href="?pagina=<?php echo 1; ?>"><img src="../img/next2.png" alt="" style="width: 18px; height: 18px;"></a></li>
                <li><a href="?pagina=<?php echo $pagina - 1; ?>"><img src="../img/next4.png" alt="" style="width: 18px; height: 18px;"></a></li>
                <?php
                }
                for ($i=1; $i <= $total_paginas; $i++)
                {
                    if($i == $pagina)
                    {
                        echo '<li class="pageselected">'.$i.'</li>';
                    }else{
                        echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>'; 
                    }
                }
                if($pagina != $total_paginas)
                {
                ?>

                <li><a href="?pagina=<?php echo $pagina + 1; ?>"><img src="../img/next1.png" alt="" style="width: 18px; height: 18px;"></a></li>
                <li><a href="?pagina=<?php echo $total_paginas; ?>"><img src="../img/next.png" alt="" style="width: 18px; height: 18px;"></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
    
</body>
</html>
