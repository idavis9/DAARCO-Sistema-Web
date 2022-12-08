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
            //Cimientos
            $metros1 = "metros1";
            $metros2 = "metros2";
            $metros3 = "metros3";
            $metros4 = "metros4";
            $metros5 = "metros5";
            $metros6 = "metros6";
            $metros7 = "metros7";

            $piezas1 = "piezas1";
            $piezas2 = "piezas2";
            $piezas3 = "piezas3"; //No usado por el momento
            //---------------------------------------------------------------
            //Muros
            $metros8 = "metros8";
            $metros9 = "metros9";
            $metros10 = "metros10";
            $metros11 = "metros11";
            $metros12 = "metros12";
            $metros13 = "metros13";
            $metros14 = "metros14";
            $metros15 = "metros15";
            $metros16 = "metros16"; //No usado por el mmomento
            //---------------------------------------------------------------
            //Boveda
            $metros17 = "metros17";
            $metros18 = "metros18";
            $metros19 = "metros19";
            $metros20 = "metros20";
           

            //Obteniendo los valores dependiendo del producto
            //Ciminetos
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

            else if ($piezas1 == $nombre){
                $cantidad_piezas1 = $cantidad;
            }
            else if ($piezas2 == $nombre){
                $cantidad_piezas2 = $cantidad;
            }
          /*  else if ($piezas3 == $nombre){
                $cantidad_piezas3 = $cantidad;
            } No usado por el momento */ 

            //---------------------------------------------------------
            //Muros
            else if ($metros8 == $nombre){
                $cantidad_metros8 = $cantidad;
            }
            else if ($metros9 == $nombre){
                $cantidad_metros9 = $cantidad;
            }
            else if ($metros10 == $nombre){
                $cantidad_metros10 = $cantidad;
            }
            else if ($metros11 == $nombre){
                $cantidad_metros11 = $cantidad;
            }
            else if ($metros12 == $nombre){
                $cantidad_metros12 = $cantidad;
            }
            else if ($metros13 == $nombre){
                $cantidad_metros13 = $cantidad;
            }
            else if ($metros14 == $nombre){
                $cantidad_metros14 = $cantidad;
            }
            else if ($metros15 == $nombre){
                $cantidad_metros15 = $cantidad;
            }
            else if ($metros16 == $nombre){
                $cantidad_metros16 = $cantidad;
            }

            //---------------------------------------------------
            //Boveda
            else if ($metros17 == $nombre){
                $cantidad_metros17 = $cantidad;
            }
            else if ($metros18 == $nombre){
                $cantidad_metros18 = $cantidad;
            }
            else if ($metros19 == $nombre){
                $cantidad_metros19 = $cantidad;
            }
            else if ($metros20 == $nombre){
                $cantidad_metros20 = $cantidad;
            }
           
        }
    }