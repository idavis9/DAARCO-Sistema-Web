<?php
error_reporting(0);
    require '../inventario/conexion.php';

    $sql4 = "SELECT * FROM calculos";
    $resultado4 = $conection->query($sql4);
    $num_rows = $resultado4->num_rows;
    if ($num_rows > 0) {
        while ($row = $resultado4->fetch_assoc()) {
            //Variables para la tabla
            $cantidad = $row["cantidad"];
            $nombre = $row["nombre"];

            //Variales para obtener los datos dependiendo del producto
            $metros1 = "metros1";
            $metros2 = "metros2";
            $metros3 = "metros3";
            $metros4 = "metros4";
            $metros5 = "metros5";
            $metros6 = "metros6";
            $metros7 = "metros7";
            $metros8 = "metros8";
            $metros9 = "metros9";
            $piezas1 = "piezas1";
            $piezas2 = "piezas2";

            //Obteniendo los valores dependiendo del producto
            if($metros1 == $nombre){
                $cantidad_metros1 = $cantidad;
            } 
            else if ($metros2 == $nombre){
                $cantidad_metros2 = $cantidad;
            }
            else if ($metros3 == $nombre){
                $cantidad_metros3 = $cantidad;
            }
            else if ($metros4 == $nombre){
                $cantidad_metros4 = $cantidad;
            }
            else if ($metros5 == $nombre){
                $cantidad_metros5 = $cantidad;
            }
            else if ($metros6 == $nombre){
                $cantidad_metros6 = $cantidad;
            }
            else if ($metros7 == $nombre){
                $cantidad_metros7 = $cantidad;
            }
            else if ($metros8 == $nombre){
                $cantidad_metros8 = $cantidad;
            }
            else if ($metros9 == $nombre){
                $cantidad_metros9 = $cantidad;
            }
            else if ($piezas1 == $nombre){
                $cantidad_piezas1 = $cantidad;
            }
            else if ($piezas2 == $nombre){
                $cantidad_piezas2 = $cantidad;
            }

        }
    }