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
            <h1>Boveda</h1>
        </div>
        <?php
            include_once 'barra.php';
        ?>
        <br>

        <!-- Boveda de ladrillo adobon -->
       <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Boveda de ladrillo adobon
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
                    <td><?php echo $Ladrilloadobon;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17*50;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_ladrilloadobon, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_ladrilloadobon * $cantidad;
                            echo number_format($calculosub, 2);
                            $total20 = $total20 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_ladrilloadobon;?></td>
                </tr>
                <tr>
                    <td><?php echo $Arenacribada;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17/25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_arenacribada, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_arenacribada * $cantidad;
                            echo number_format($calculosub, 2);
                            $total20 = $total20 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_arenacribada;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17/4;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento* $cantidad;
                            echo number_format($calculosub, 2);
                            $total20 = $total20 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cal;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17/2.5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cal, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cal * $cantidad;
                            echo number_format($calculosub, 2);
                            $total20 = $total20 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cal;?></td>
                </tr>
                <tr>
                    <td><?php echo $Ladrillobarra38;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_ladrillobarra38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_ladrillobarra38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total20 = $total20 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_ladrillobarra38;?></td>
                </tr>
                <tr>
                    <td><?php echo $Sellador;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17/10;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_sellador, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_sellador * $cantidad;
                            echo number_format($calculosub, 2);
                            $total20 = $total20 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_sellador;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobrabovedaadobon;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros17*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobrabovedaadobon, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobrabovedaadobon = $precio_manodeobrabovedaadobon* $cantidad;
                            echo number_format($calculosub_manodeobrabovedaadobon, 2);
                            $total20 = $total20 + $calculosub_manodeobrabovedaadobon;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobrabovedaadobon;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros17.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros17" required value=<?php echo $cantidad_metros17 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total20, 2) ?></th>
            </thead>
        </table> <br>


         <!-- Losa de concreto -->
       <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Losa de concreto
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
                    <td><?php echo $Ladrilloadobon;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros18*25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_ladrilloadobon, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_ladrilloadobon * $cantidad;
                            echo number_format($calculosub, 2);
                            $total21 = $total21 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_ladrilloadobon;?></td>
                </tr>
                <tr>
                    <td><?php echo $Arenacribada;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros18/25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_arenacribada, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_arenacribada * $cantidad;
                            echo number_format($calculosub, 2);
                            $total21 = $total21 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_arenacribada;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros18/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento* $cantidad;
                            echo number_format($calculosub, 2);
                            $total21 = $total21 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cal;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros18/5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cal, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cal * $cantidad;
                            echo number_format($calculosub, 2);
                            $total21 = $total21 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cal;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobralosa;?></td>
                    <td>
                        <?php 
                            $cantidad = $cantidad_metros18*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobralosa, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub_manodeobralosa = $precio_manodeobralosa* $cantidad;
                            echo number_format($calculosub_manodeobralosa, 2);
                            $total21 = $total21 + $calculosub_manodeobralosa;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobralosa;?></td>
                </tr>
                <tr>
                    <td><?php echo $Varilla38;?></td>
                    <td>
                        <?php 
                            $cantidad = (((($cantidad_metros18/10)/0.5)*10)/12)*2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total21 = $total21 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla38;?></td>
                </tr>
            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="./actualizaciones/actualizar_metros18.php" method="post">
                        <th><input type="number" class="form-control" name="actualizar_metros18" required value=<?php echo $cantidad_metros18 ?>></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total21, 2) ?></th>
            </thead>
        </table> <br>

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
                            $suma_total_manodeobra3 = $calculosub_manodeobrabovedaadobon + $calculosub_manodeobralosa;
                            echo number_format($suma_total_manodeobra3, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $materiales1 = "Materiales"; echo $materiales1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_materiales3 = ($total20 + $total21) - $suma_total_manodeobra3;
                            echo number_format($suma_total_materiales3, 2); 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $arqui = "Arquitecto"; echo $arqui;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_arqui3 = ($suma_total_manodeobra3 + $suma_total_materiales3) * 0.1;
                            echo number_format($suma_total_arqui3, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $totalfinal1 = "Total"; echo $totalfinal1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_total3 = $suma_total_manodeobra3 + $suma_total_materiales3 + $suma_total_arqui3;
                            echo number_format($suma_total_total3, 2);
                            
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>


    </section>
    
</body>
</html>