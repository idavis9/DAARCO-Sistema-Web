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
        include_once 'datos.php';
        include_once 'calculos.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../inventario/style-inventario.css?v=1.6">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <link rel="stylesheet" href="style-cot.css?v=1.6">
    <title>Document</title>
</head>

<body style="background-color: #e0e0e0">

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <div class="titulo-prov">
            <img src="../img/cotizador.png" alt="" style="width: auto; height: 60px; margin-bottom: 10px;">
            <h1>Muros</h1>
        </div>
        <?php
            include_once 'barra.php';
        ?>
        <br>

        <!-- Castillo 10x10 k1 -->
       <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Castillo 10x10 K1
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>   
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla38;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8/3;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla38;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos1010;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos1010, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos1010 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos1010;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8/40;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8/7;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracastillo10x10;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracastillo10x10, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracastillo10x10 = $precio_manodeobracastillo10x10 * $cantidad;
                            echo number_format($calculosub_manodeobracastillo10x10, 2);
                            $total11 = $total11 + $calculosub_manodeobracastillo10x10;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracastillo10x10;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8/5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros8/10;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total11 = $total11 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros8.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros8" required value=<?php echo $cantidad_metros8 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total11, 2) ?></th>
            </thead>
        </table> <br>



        <!-- Castillo 10x15 k2 -->
        <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Castillo 10x15 K2
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>    
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla38;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9/3;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla38;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos1015;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos1015, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos1015 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos1015;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9/40;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9/7;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracastillo10x15;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracastillo10x15, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracastillo10x15 = $precio_manodeobracastillo10x15 * $cantidad;
                            echo number_format($calculosub_manodeobracastillo10x15, 2);
                            $total12 = $total12 + $calculosub_manodeobracastillo10x15;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracastillo10x15;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9/5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros9/10;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total12 = $total12 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros9.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros9" required value=<?php echo $cantidad_metros9 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total12, 2) ?></th>
            </thead>
        </table> <br>

         <!-- Columna 15x30 -->
         <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Columna 15x30
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>    
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla38;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla38;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos1020;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos1020, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos1020 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos1020;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10/25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracolumna15x30;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracolumna15x30, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracolumna15x30 = $precio_manodeobracolumna15x30 * $cantidad;
                            echo number_format($calculosub_manodeobracolumna15x30, 2);
                            $total13 = $total13 + $calculosub_manodeobracolumna15x30;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracolumna15x30;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10/2.5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros10/8;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total13 = $total13 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros10.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros10" required value=<?php echo $cantidad_metros10 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total13, 2) ?></th>
            </thead>
        </table> <br>


    <!-- Columna 20x30 -->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Columna 20x30
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>    
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla12;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla12, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla12 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla12;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos1520;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos1520, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos1520 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos1520;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11/25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracolumna20x30;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracolumna20x30, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracolumna20x30 = $precio_manodeobracolumna20x30 * $cantidad;
                            echo number_format($calculosub_manodeobracolumna20x30, 2);
                            $total14 = $total14 + $calculosub_manodeobracolumna20x30;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracolumna20x30;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11/2.5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros11/8;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total14 = $total14 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros11.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros11" required value=<?php echo $cantidad_metros11 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total14, 2) ?></th>
            </thead>
        </table> <br>


         <!-- Columna 30x30 -->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Columna 30x30
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>    
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla12;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla12, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla12 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla12;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos2020;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos2020, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos2020 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos2020;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12/12;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12/1.5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracolumna30x30;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracolumna30x30, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracolumna30x30 = $precio_manodeobracolumna30x30 * $cantidad;
                            echo number_format($calculosub_manodeobracolumna30x30, 2);
                            $total15 = $total15 + $calculosub_manodeobracolumna30x30;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracolumna30x30;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros12/3;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total15 = $total15 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros12.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros12" required value=<?php echo $cantidad_metros12 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total15, 2) ?></th>
            </thead>
        </table> <br>


          <!-- Columna 40x40 -->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Columna 40x40
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>    
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla12;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla12, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla12 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla12;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos3030;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos3030, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos3030 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos3030;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13/8;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13/1.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracolumna40x40;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracolumna40x40, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracolumna40x40 = $precio_manodeobracolumna40x40 * $cantidad;
                            echo number_format($calculosub_manodeobracolumna40x40, 2);
                            $total16 = $total16 + $calculosub_manodeobracolumna40x40;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracolumna40x40;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros13/3;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total16 = $total16 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros13.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros13" required value=<?php echo $cantidad_metros13 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total16, 2) ?></th>
            </thead>
        </table> <br>

        <!-- Columna 50x50 -->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Columna 50x50
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>    
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Varilla12;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla12, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla12 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla12;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos4040;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14*5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos4040, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_anillos4040 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_anillos4040;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14/6;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracolumna50x50;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracolumna50x50, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobracolumna50x50 = $precio_manodeobracolumna50x50 * $cantidad;
                            echo number_format($calculosub_manodeobracolumna50x50, 2);
                            $total17 = $total17 + $calculosub_manodeobracolumna50x50;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracolumna50x50;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros14/3;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total17 = $total17 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros14.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros14" required value=<?php echo $cantidad_metros14 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total17, 2) ?></th>
            </thead>
        </table> <br>

         <!-- Muro de ladrillo barra -->
         <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Muro de ladrillo barra
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Cantidad</th>  
                <th>Precio</th>   
                <th>Subtotal</th>
                <th>Unidad</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td><?php echo $Ladrillobarra38;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros15*30;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_ladrillobarra38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_ladrillobarra38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total18 = $total18 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_ladrillobarra38;?></td>
                </tr>
                <tr>
                    <td><?php echo $Arenacribada;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros15/50;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_arenacribada, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_arenacribada * $cantidad;
                            echo number_format($calculosub, 2);
                            $total18 = $total18 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_arenacribada;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros15/5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total18 = $total18 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cal;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros15/2.5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cal, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cal * $cantidad;
                            echo number_format($calculosub, 2);
                            $total18 = $total18 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cal;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobramuro;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros15*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobramuro, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobramuro = $precio_manodeobramuro * $cantidad;
                            echo number_format($calculosub_manodeobramuro, 2);
                            $total18 = $total18 + $calculosub_manodeobramuro;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobramuro;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros15.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros15" required value=<?php echo $cantidad_metros15; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total18, 2) ?></th>
            </thead>
        </table>


         <!-- Totales -->
         <table class="table" style="background-color: rgb(17, 16, 37); color:white; margin-bottom: -1px; width: 50%;">
            <thead>
                <th style="font-size: 23px;">
                    Totales
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped" style="width: 50%;">
            <thead>
             <!--<th>Id</th> -->
               
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $manodeobra1 = "Mano de obra"; echo $manodeobra1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_manodeobra2 = $calculosub_manodeobracastillo10x10 + $calculosub_manodeobracastillo10x15 + $calculosub_manodeobracolumna15x30 + $calculosub_manodeobracolumna20x30 + $calculosub_manodeobracolumna30x30 + $calculosub_manodeobracolumna40x40 + $calculosub_manodeobracolumna50x50 + $calculosub_manodeobramuro;
                            echo number_format($suma_total_manodeobra2, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $materiales1 = "Materiales"; echo $materiales1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_materiales2 = ($total11 + $total12 + $total13 + $total14 + $total15 + $total16 + $total17 + $total18) - $suma_total_manodeobra2;
                            echo number_format($suma_total_materiales2, 2); 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $arqui = "Arquitecto"; echo $arqui;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_arqui2 = ($suma_total_manodeobra2 + $suma_total_materiales2) * 0.1;
                            echo number_format($suma_total_arqui2, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $totalfinal1 = "Total"; echo $totalfinal1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_total2 = $suma_total_manodeobra2 + $suma_total_materiales2 + $suma_total_arqui2;
                            echo number_format($suma_total_total2, 2);
                            
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>


    </section>
    
</body>
</html>