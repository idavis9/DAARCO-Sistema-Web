<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
            <h1>Cimientos</h1>
        </div>
        <?php
        include_once 'barra.php';
        ?>
        <br>
        
        <!-- Cimiento de mampostería -->
       <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Cimiento de mampostería
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
                    <td><?php echo $Piedrabraza; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 10;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_piedrabraza, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_piedrabraza * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_priedrabraza; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Arenacribada; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 20;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_arenacribada, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_arenacribada * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_arenacribada; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cal; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 1.5;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cal, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cal * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cal; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 2;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracimiento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracimiento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobracimiento = $precio_manodeobracimiento * $cantidad;
                         echo number_format($calculosub_manodeobracimiento, 2);
                         $total = $total + $calculosub_manodeobracimiento;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobracimiento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 2.5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gasolina * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gasolina; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 8;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderevolvedora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderetroexcavadora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros1 / 5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderetroexcavadora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderetroexcavadora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderetroexcavadora; ?></td>
                </tr>
                <tr>
                    <td><?php $retirarescesodetierra = "Retirar exceso de tierra";
                    echo $retirarescesodetierra; ?></td>
                    <td>
                        <?php

                        ?>
                    </td>
                    <td>$ <?php $precio_retirare = 600;
                    echo number_format($precio_retirare, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_retirare;
                         echo number_format($calculosub, 2);
                         $total = $total + $calculosub;
                         ?>
                    </td>
                    <td><?php $unidad_retirare = "Camion";
                    echo $unidad_retirare; ?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros1.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros1" required value=<?php echo $cantidad_metros1 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total, 2) ?></th>
            </thead>
        </table> <br>



        <!-- Zapata 70 x 70cm -->
        <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Zapata 70 x 70cm
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
                    <td><?php echo $Varilla38; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_varilla38 * $cantidad;
                         echo number_format($calculosub, 2);
                         $total2 = $total2 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_varilla38; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 / 4;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_alambre * $cantidad;
                         echo number_format($calculosub, 2);
                         $total2 = $total2 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_alambre; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 / 10;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * $cantidad;
                         echo number_format($calculosub, 2);
                         $total2 = $total2 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * $cantidad;
                         echo number_format($calculosub, 2);
                         $total2 = $total2 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobrazapata; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobrazapata, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobrazapata = $precio_manodeobrazapata * $cantidad;
                         echo number_format($calculosub_manodeobrazapata, 2);
                         $total2 = $total2 + $calculosub_manodeobrazapata;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobrazapata; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gasolina * $cantidad;
                         echo number_format($calculosub, 2);
                         $total2 = $total2 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gasolina; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas1 / 8;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderevolvedora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total2 = $total2 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora; ?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Piezas</th>
                    <form action="./actualizaciones/actualizar_piezas1.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_piezas1" required value=<?php echo $cantidad_piezas1; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total2, 2) ?></th>
            </thead>
        </table>




         <!-- Zapata 90 x 90cm -->
         <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Zapata 90 x 90cm
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
                    <td><?php echo $Varilla38; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_varilla38 * $cantidad;
                         echo number_format($calculosub, 2);
                         $total3 = $total3 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_varilla38; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 / 4;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_alambre * $cantidad;
                         echo number_format($calculosub, 2);
                         $total3 = $total3 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_alambre; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 / 10;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * $cantidad;
                         echo number_format($calculosub, 2);
                         $total3 = $total3 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 * 2;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * $cantidad;
                         echo number_format($calculosub, 2);
                         $total3 = $total3 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobrazapata; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobrazapata, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobrazapata2 = $precio_manodeobrazapata * $cantidad;
                         echo number_format($calculosub_manodeobrazapata2, 2);
                         $total3 = $total3 + $calculosub_manodeobrazapata2;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobrazapata; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gasolina * $cantidad;
                         echo number_format($calculosub, 2);
                         $total3 = $total3 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gasolina; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_piezas2 / 8;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderevolvedora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total3 = $total3 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora; ?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Piezas</th>
                    <form action="./actualizaciones/actualizar_piezas2.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_piezas2" required value=<?php echo $cantidad_piezas2; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total3, 2) ?></th>
            </thead>
        </table>


    <!-- Nivelación de formas 15cm -->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Nivelación de formas 15cm
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
                    <td><?php echo $Varilla38; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros2 / 12;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_varilla38 * $cantidad;
                         echo number_format($calculosub, 2);
                         $total4 = $total4 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_varilla38; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros2 / 12;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total4 = $total4 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros2 / 2.5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * $cantidad;
                         echo number_format($calculosub, 2);
                         $total4 = $total4 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobraformas15cm; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros2 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobraformas15cm, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobraformas15cm = $precio_manodeobraformas15cm * $cantidad;
                         echo number_format($calculosub_manodeobraformas15cm, 2);
                         $total4 = $total4 + $calculosub_manodeobraformas15cm;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobraformas15cm; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentadeformas; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros2 / 3;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentadeformas, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentadeformas * $cantidad;
                         echo number_format($calculosub, 2);
                         $total4 = $total4 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentadeformas; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros2 / 5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderevolvedora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total4 = $total4 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora; ?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros2.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros2" required value=<?php echo $cantidad_metros2; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total4, 2) ?></th>
            </thead>
        </table>



         <!-- Nivelación de formas 20cm -->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Nivelación de formas 20cm
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
                    <td><?php echo $Varilla38; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros3 / 12;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_varilla38 * $cantidad;
                         echo number_format($calculosub, 2);
                         $total5 = $total5 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_varilla38; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros3 / 10;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total5 = $total5 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros3 / 1.5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * $cantidad;
                         echo number_format($calculosub, 2);
                         $total5 = $total5 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobraformas20cm; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros3 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobraformas20cm, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobraformas20cm = $precio_manodeobraformas20cm * $cantidad;
                         echo number_format($calculosub_manodeobraformas20cm, 2);
                         $total5 = $total5 + $calculosub_manodeobraformas20cm;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobraformas20cm; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentadeformas; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros3 / 3;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentadeformas, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentadeformas * $cantidad;
                         echo number_format($calculosub, 2);
                         $total5 = $total5 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentadeformas; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros3 / 5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderevolvedora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total5 = $total5 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora; ?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros3.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros3" required value=<?php echo $cantidad_metros3; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total5, 2) ?></th>
            </thead>
        </table>


          <!-- Cadena de desplante-->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Cadena de desplante
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
                    <td><?php echo $Varilla38; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 / 3;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_varilla38 * $cantidad;
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_varilla38; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 * 0.2;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_alambre * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_alambre; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Anillos1015; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 * 5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_anillos1015, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_anillos1015 * $cantidad;
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_anillos1015; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 / 40;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 / 4;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * $cantidad;
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracadenas; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracadenas, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobracadenas = $precio_manodeobracadenas * $cantidad;
                         echo number_format($calculosub_manodeobracadenas, 2);
                         $total6 = $total6 + $calculosub_manodeobracadenas;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobracadenas; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 / 5;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gasolina * $cantidad;
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gasolina; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros4 / 10;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentaderevolvedora * $cantidad;
                         echo number_format($calculosub, 2);
                         $total6 = $total6 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora; ?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros4.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros4" required value=<?php echo $cantidad_metros4; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total6, 2) ?></th>
            </thead>
        </table>
        


         <!-- Compactado-->
    <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Compactado
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
                    <td><?php echo $Tepetate; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros5 / 3;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_tepetate, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_tepetate * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total7 = $total7 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_tepetate; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentadebobcat; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros5 / 15;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentadebobcat, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentadebobcat * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total7 = $total7 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentadebobcat; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentadebailarina; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros5 / 100;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentadebailarina, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_rentadebailarina * $cantidad;
                         echo number_format($calculosub, 2);
                         $total7 = $total7 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_rentadebailarina; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracompactado; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros5 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracompactado, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobracompactado = $precio_manodeobracompactado * $cantidad;
                         echo number_format($calculosub_manodeobracompactado, 2);
                         $total7 = $total7 + $calculosub_manodeobracompactado;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobracompactado; ?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros5.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros5" required value=<?php echo $cantidad_metros5; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total7, 2) ?></th>
            </thead>
        </table>


    
         <!-- Firme 8cm -->
         <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Firme 8cm
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
                    <td><?php echo $Alambreelectrosoldado; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros6 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambreelectrosoldado, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_alambreelectrosoldado * $cantidad;
                         echo number_format($calculosub, 2);
                         $total8 = $total8 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_alambreelectrosoldado; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros6 / 2;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total8 = $total8 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros6 / 32;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * $cantidad;
                         echo number_format($calculosub, 2);
                         $total8 = $total8 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobrafirme8cm; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros6 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobrafirme8cm, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobrafirme8cm = $precio_manodeobrafirme8cm * $cantidad;
                         echo number_format($calculosub_manodeobrafirme8cm, 2);
                         $total8 = $total8 + $calculosub_manodeobrafirme8cm;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobrafirme8cm; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobraestampado; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros6 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobraestampado, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobraestampado1 = $precio_manodeobraestampado * $cantidad;
                         echo number_format($calculosub_manodeobraestampado1, 2);
                         $total8 = $total8 + $calculosub_manodeobraestampado1;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobraestampado; ?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros6.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros6" required value=<?php echo $cantidad_metros6; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total8, 2) ?></th>
            </thead>
        </table>


         <!-- Firme 10cm -->
         <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Firme 10cm
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
                    <td><?php echo $Alambreelectrosoldado; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros7 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambreelectrosoldado, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_alambreelectrosoldado * $cantidad;
                         echo number_format($calculosub, 2);
                         $total9 = $total9 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_alambreelectrosoldado; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros7 / 1.5;
                        echo round($cantidad, 0, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_cemento * round($cantidad, 0, PHP_ROUND_HALF_UP);
                         echo number_format($calculosub, 2);
                         $total9 = $total9 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_cemento; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros7 / 24;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub = $precio_gravarena * $cantidad;
                         echo number_format($calculosub, 2);
                         $total9 = $total9 + $calculosub;
                         ?>
                    </td>
                    <td><?php echo $unidad_gravarena; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobrafirme10cm; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros7 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobrafirme10cm, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobrafirme10cm = $precio_manodeobrafirme10cm * $cantidad;
                         echo number_format($calculosub_manodeobrafirme10cm, 2);
                         $total9 = $total9 + $calculosub_manodeobrafirme10cm;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobrafirme10cm; ?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobraestampado; ?></td>
                    <td>
                        <?php
                        $cantidad = $cantidad_metros7 * 1;
                        echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobraestampado, 2); ?></td>
                    <td>$
                         <?php
                         $calculosub_manodeobraestampado2 = $precio_manodeobraestampado * $cantidad;
                         echo number_format($calculosub_manodeobraestampado2, 2);
                         $total9 = $total9 + $calculosub_manodeobraestampado2;
                         ?>
                    </td>
                    <td><?php echo $unidad_manodeobraestampado; ?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros7.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros7" required value=<?php echo $cantidad_metros7; ?>></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total9, 2) ?></th>
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
                    <td style="font-size: 22px; font-weight: 600;"><?php $manodeobra1 = "Mano de obra";
                    echo $manodeobra1; ?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php
                         $suma_total_manodeobra = $calculosub_manodeobracimiento + $calculosub_manodeobrazapata + $calculosub_manodeobrazapata2 + $calculosub_manodeobraformas15cm + $calculosub_manodeobraformas20cm + $calculosub_manodeobracadenas + $calculosub_manodeobracompactado + $calculosub_manodeobrafirme8cm + $calculosub_manodeobraestampado1 + $calculosub_manodeobrafirme10cm + $calculosub_manodeobraestampado2;
                         echo number_format($suma_total_manodeobra, 2);
                         ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $materiales1 = "Materiales";
                    echo $materiales1; ?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php
                         $suma_total_materiales = ($total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9) - $suma_total_manodeobra;
                         echo number_format($suma_total_materiales, 2);
                         ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $arqui = "Arquitecto";
                    echo $arqui; ?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php
                         $suma_total_arqui = ($suma_total_manodeobra + $suma_total_materiales) * 0.1;
                         echo number_format($suma_total_arqui, 2);
                         ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $totalfinal1 = "Total";
                    echo $totalfinal1; ?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php
                         $suma_total_total = $suma_total_manodeobra + $suma_total_materiales + $suma_total_arqui;
                         echo number_format($suma_total_total, 2);

                         ?>
                    </td>
                </tr>
            </tbody>
        </table>
</div>


    </section>

    
</body>
</html>