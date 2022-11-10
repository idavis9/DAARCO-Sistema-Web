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
    if(empty($_POST['precio']))
    {
        $alert='<p class="msg-error" style="color: #e65655;">*El campo es obligatorio</p>';

    } else{
        include "../inventario/conexion.php";
        $id = $_POST['id'];
        $precio = $_POST['precio'];
        
            $query_insert = mysqli_query($conection,"UPDATE precios SET precio='$precio' WHERE id='$id'");

            if($query_insert){
                $alert='<p class="msg-save" style="color: #126e00;">Precio actualizado exitosamente.</p>';
            }else{
                $alert='<p class="msg-error" style="color: #e65655;">Error al actualizar el Precio</p>';
            }
        }
        
    }


?>

<?php 

include("../inventario/conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM precios WHERE id='$id'";
$query=mysqli_query($conection,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../inventario/style-inventario.css?v=1.4">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <title>Document</title>
</head>
<body style="background-color: #e0e0e0">
    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
    <div class="titulo-prov">
            <img src="../img/cotizador.png" alt="" style="margin-bottom: 10px;">
            <h1>Actualizar Precio</h1>
        </div>
    <div class="contenedor">
    <div class="form-register">
            
    <?php echo isset($alert) ? $alert : ''; ?>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                <label for=concepto>Concepto</label>
                <input type="text" class="form-control" name="concepto" placeholder="Concepto" disabled=»disabled» value="<?php echo $row['concepto']  ?>">
                <br>
                <label for=precio>Precio</label>
                <input type="number" class="form-control" name="precio" placeholder="Precio" step="0.1" value="<?php echo $row['precio']  ?>">  
                <br>
                <label for=cantidad>Cantidad</label>
                <input type="text" class="form-control" name="unidad" placeholder="Unidad" disabled=»disabled» value="<?php echo $row['unidad']  ?>">  
                <br>
                <div class="boton-añadir">
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                    <a href="precios.php" class="btn btn-dark">Regresar</a>
                 </div>
        </form>
        </div>
        </div>
    </section>
</body>
</html>