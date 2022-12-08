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
    <link rel="stylesheet" href="../inventario/style-inventario.css?v=1.1">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <link rel="stylesheet" href="style-cot.css?v=1.8">
    <title>Document</title>
</head>

<body style="background-color: #e0e0e0">

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <div class="titulo-prov">
            <img src="../img/cotizador.png" alt="" style="width: auto; height: 60px; margin-bottom: 10px;">
            <h1>Total</h1>
        </div>
        <?php
            include_once 'barra.php';
        ?>

        <div class="totales">
            <?php
                require_once 'cimientos.php';
                require_once 'Muros.php';
                require_once 'Boveda.php'
            ?>
        </div> <br>

        <div class="todo">
     <!-- Totales -->
     <table class="table" style="background-color: rgb(17, 16, 37); color:white; margin-bottom: -1px; width: 80%;">
            <thead>
                <th style="font-size: 23px;">
                    Rubro
                </th>
                <th style="font-size: 23px;">
                    Costo
                </th>
            </thead>
        </table>
        <table class="table table-light table-striped" style="width: 80%;">
            <thead>
             <!--<th>Id</th> -->
               
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
        <tbody id="content">
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $cimientos = "Cimientos"; echo $cimientos;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            echo number_format($suma_total_total, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $muros = "Muros"; echo $muros;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            echo number_format($suma_total_total2, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $boveda = "Boveda"; echo $boveda;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            echo number_format($suma_total_total3, 2);
                        ?>
                    </td>
                </tr> 
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $espacio = "------------------------"; echo $espacio;?></td>
                    <td style="font-size: 22px; font-weight: 600;">
                         <?php 
                            $espacio2 = "------------------------"; echo $espacio2;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $manodeobra1 = "Mano de obra"; echo $manodeobra1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_manodeobra_total = $suma_total_manodeobra + $suma_total_manodeobra2 + $suma_total_manodeobra3;
                            echo number_format($suma_total_manodeobra_total, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $materiales1 = "Materiales"; echo $materiales1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_materiales_total = $suma_total_materiales + $suma_total_materiales2 + $suma_total_materiales3;
                            echo number_format($suma_total_materiales_total, 2); 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $arqui = "Arquitecto"; echo $arqui;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $suma_total_arqui_total = $suma_total_arqui + $suma_total_arqui2 + $suma_total_arqui3;
                            echo number_format($suma_total_arqui_total, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $espacio = "------------------------"; echo $espacio;?></td>
                    <td style="font-size: 22px; font-weight: 600;">
                         <?php 
                            $espacio2 = "------------------------"; echo $espacio2;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 22px; font-weight: 600;"><?php $totalfinal1 = "Total Completo"; echo $totalfinal1;?></td>
                    <td style="font-size: 22px; font-weight: 600;">$
                         <?php 
                            $total_completo = $suma_total_total3 + $suma_total_total2 + $suma_total_total;
                            echo number_format($total_completo, 2);
                            
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

        </div>


    </section>
    
 </body>
</html>