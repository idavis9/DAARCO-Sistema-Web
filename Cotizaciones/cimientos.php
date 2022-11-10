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
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../inventario/style-inventario.css?v=1.1">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <link rel="stylesheet" href="style-cot.css?v=1.5">
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
                    <td><?php echo $Piedrabraza;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1/10;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_piedrabraza, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_piedrabraza * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_priedrabraza;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1/25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Arenaamarilla;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1/25;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_arenaamarilla, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_arenaamarilla * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_arenaamarilla;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1*0.75;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobracimiento;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobracimiento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_manodeobracimiento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobracimiento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1/2.5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1/8;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderetroexcavadora;?></td>
                    <td>
                        <?php 
                            $cantidad = $metros1/5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderetroexcavadora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderetroexcavadora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total = $total + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderetroexcavadora;?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Metros</th>
                    <form action="" method="post">
                        <th><input type="number" class="form-control" name="metros1" required value="0"></th>
                        <th class="bot"><button type="submit" class="btn">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total, 2) ?></th>
            </thead>
        </table> <br>



        <!-- Cimiento de mampostería -->
        <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Zapata 60 x 60cm
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
                            $cantidad = $piezas1/2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_varilla38, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_varilla38 * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_varilla38;?></td>
                </tr>
                <tr>
                    <td><?php echo $Alambre;?></td>
                    <td>
                        <?php 
                            $cantidad = $piezas1*0.2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_alambre, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_alambre * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_alambre;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gravarena;?></td>
                    <td>
                        <?php 
                            $cantidad = $piezas1/10;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gravarena, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gravarena * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gravarena;?></td>
                </tr>
                <tr>
                    <td><?php echo $Cemento;?></td>
                    <td>
                        <?php 
                            $cantidad = $piezas1*2;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_cemento, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_cemento * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_cemento;?></td>
                </tr>
                <tr>
                    <td><?php echo $Manodeobrazapata;?></td>
                    <td>
                        <?php 
                            $cantidad = $piezas1*1;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_manodeobrazapata, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_manodeobrazapata * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_manodeobrazapata;?></td>
                </tr>
                <tr>
                    <td><?php echo $Gasolina;?></td>
                    <td>
                        <?php 
                            $cantidad = $piezas1/5;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_gasolina, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_gasolina * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_gasolina;?></td>
                </tr>
                <tr>
                    <td><?php echo $Rentaderevolvedora;?></td>
                    <td>
                        <?php 
                            $cantidad = $piezas1/8;
                            echo $cantidad;
                        ?>
                    </td>
                    <td>$ <?php echo number_format($precio_rentaderevolvedora, 2);?></td>
                    <td>$
                         <?php 
                            $calculosub = $precio_rentaderevolvedora * $cantidad;
                            echo number_format($calculosub, 2);
                            $total2 = $total2 + $calculosub;
                        ?>
                    </td>
                    <td><?php echo $unidad_rentaderevolvedora;?></td>
                </tr>

            </tbody>

            </table>
            <table class="table" style="background-color: #681319; color:white; margin-top: -17px;">
            <thead style="font-size: 20px;">
                    <th>Piezas</th>
                    <form action="" method="post">
                        <th><input type="number" class="form-control" name="piezas1" required value="0"></th>
                        <th class="bot"><button type="submit" class="btn" href="#">COTIZAR</button></th>
                    </form>
                    <th style="width: 600px;">Total $ <?php echo number_format($total2, 2) ?></th>
            </thead>
        </table>

    </section>
    
</body>
</html>