<?php
error_reporting(0);
    require '../inventario/conexion.php';
    $sql3 = "SELECT * FROM precios";
    $resultado3 = $conection->query($sql3);
    $num_rows = $resultado3->num_rows;
    
    if ($num_rows > 0) {
        while ($row = $resultado3->fetch_assoc()) {
            //Variables para la tabla
           $concepto = $row["concepto"];
           $precio = $row["precio"];
           $unidad = $row["unidad"];
           $total = 0;
           $total2 = 0;

           //Variales para obtener los datos dependiendo del producto
           $Piedrabraza = "Piedra braza";
           $Gravarena = "Gravarena";
           $Arenacribada = "Arena cribada";
           $Arenaamarilla = "Arena amarilla";
           $Cemento = "Cemento";
           $Cal = "Cal";
           $Gasolina = "Gasolina";
           $Rentaderevolvedora = "Renta de revolvedora";
           $Rentaderetroexcavadora = "Renta de retroexcavadora";
           $Varilla38 = "Varilla 3/8";
           $Varilla12 = "Varilla 1/2";
           $Alambre = "Alambre";
           $Rentadeformas = "Renta de formas";
           $Anillos1010 = "Anillos 10 x 10";
           $Anillos1015 = "Anillos 10 x 15";
           $Anillos2015 = "Anillos 20 x 15";
           $Tepetate = "Tepetate";
           $Rentadebobcat = "Renta de bobcat";
           $Rentadebailarina = "Renta de bailarina";
           $Alambreelectrosoldado = "Alambre electrosoldado";
           $Ladrillobarra38 = "Ladrillo barra 38cm";
           $Ladrilloabodon = "Ladrillo abodon";
           $Vigueta = "Vigueta";
           $Viguetacuata = "Vigueta cuata";
           $Puentedecarga30 = "Puente de carga 30cm";
           $Puentedecarga40 = "Puente de carga 40cm";
           $Puentedecarga50 = "Puente de carga 50cm";
           $Puentedecarga60 = "Puente de carga 60cm";
           $Bovedilla = "Bovedilla";
           $Calceton = "Calceton";
           $Manodeobracimiento = "Mano de obra cimiento";
           $Manodeobrazapata = "Mano de obra zapata";
           $Manodeobrazapatacorrida = "Mano de obra zapata corrida";
           $Manodeobraformas = "Mano de obra formas";
           $Manodeobracadenas = "Mano de obra cadenas";
           $Manodeobracompactado= "Mano de obra compactado";
           $Manodeobrafirme = "Mano de obra firme";
           


           //Obteniendo los metros para los calculos:
           if($_POST){
            $metros1 = $_POST['metros1'];
            $piezas1 = $_POST['piezas1'];
           }


           //Obteniendo los valores dependiendo del producto
            if($Piedrabraza == $concepto){
                $precio_piedrabraza = $precio;
                $unidad_priedrabraza = $unidad;
            } 
            else if($Gravarena == $concepto){
                $precio_gravarena = $precio;
                $unidad_gravarena = $unidad;
            }
            else if($Arenacribada == $concepto){
                $precio_arenacribada = $precio;
                $unidad_arenacribada = $unidad;
            } 
            else if($Arenaamarilla == $concepto){
                $precio_arenaamarilla = $precio;
                $unidad_arenaamarilla = $unidad;
            } 
            else if($Cemento == $concepto){
                $precio_cemento = $precio;
                $unidad_cemento= $unidad;
            } 
            else if($Cal == $concepto){
                $precio_cal = $precio;
                $unidad_cal = $unidad;
            } 
            else if($Gasolina == $concepto){
                $precio_gasolina = $precio;
                $unidad_gasolina = $unidad;
            } 
            else if($Rentaderevolvedora == $concepto){
                $precio_rentaderevolvedora = $precio;
                $unidad_rentaderevolvedora = $unidad;
            } 
            else if($Rentaderetroexcavadora == $concepto){
                $precio_rentaderetroexcavadora = $precio;
                $unidad_rentaderetroexcavadora = $unidad;
            } 
            else if($Varilla38 == $concepto){
                $precio_varilla38 = $precio;
                $unidad_varilla38 = $unidad;
            } 
            else if($Varilla12 == $concepto){
                $precio_varilla12 = $precio;
                $unidad_varilla12 = $unidad;
            } 
            else if($Alambre == $concepto){
                $precio_alambre = $precio;
                $unidad_alambre = $unidad;
            } 
            else if($Rentadeformas == $concepto){
                $precio_rentadeformas = $precio;
                $unidad_rentadeformas = $unidad;
            } 
            else if($Anillos1010 == $concepto){
                $precio_anillos1010 = $precio;
                $unidad_anillos1010 = $unidad;
            } 
            else if($Anillos1015 == $concepto){
                $precio_anillos1015 = $precio;
                $unidad_anillos1015 = $unidad;
            } 
            else if($Anillos2015 == $concepto){
                $precio_anillos2015 = $precio;
                $unidad_anillos2015 = $unidad;
            } 
            else if($Tepetate == $concepto){
                $precio_tepetate = $precio;
                $unidad_tepetate = $unidad;
            } 
            else if($Rentadebobcat == $concepto){
                $precio_rentadebobcat = $precio;
                $unidad_rentadebobcat = $unidad;
            } 
            else if($Rentadebailarina == $concepto){
                $precio_rentadebailarina= $precio;
                $unidad_rentadebailarina = $unidad;
            } 
            else if($Alambreelectrosoldado == $concepto){
                $precio_alambreelectrosoldado = $precio;
                $unidad_alambreelectrosoldado = $unidad;
            } 
            else if($Ladrillobarra38 == $concepto){
                $precio_ladrillobarra38 = $precio;
                $unidad_ladrillobarra38 = $unidad;
            } 
            else if($Ladrilloabodon == $concepto){
                $precio_ladrilloabodon = $precio;
                $unidad_ladrilloabodon = $unidad;
            } 
            else if($Vigueta == $concepto){
                $precio_vigueta = $precio;
                $unidad_vigueta = $unidad;
            } 
            else if($Viguetacuata == $concepto){
                $precio_viguetacuata = $precio;
                $unidad_viguetacuata = $unidad;
            } 
            else if($Puentedecarga30 == $concepto){
                $precio_puentedecarga30 = $precio;
                $unidad_puentedecarga30  = $unidad;
            } 
            else if($Puentedecarga40 == $concepto){
                $precio_puentedecarga40 = $precio;
                $unidad_puentedecarga40  = $unidad;
            } 
            else if($Puentedecarga50 == $concepto){
                $precio_puentedecarga50 = $precio;
                $unidad_puentedecarga50  = $unidad;
            } 
            else if($Puentedecarga60 == $concepto){
                $precio_puentedecarga60 = $precio;
                $unidad_puentedecarga60  = $unidad;
            } 
            else if($Bovedilla == $concepto){
                $precio_bovedilla = $precio;
                $unidad_bovedilla = $unidad;
            } 
            else if($Calceton == $concepto){
                $precio_calceton = $precio;
                $unidad_calceton = $unidad;
            } 
            else if($Manodeobracimiento == $concepto){
                $precio_manodeobracimiento = $precio;
                $unidad_manodeobracimiento = $unidad;
            } 
            else if($Manodeobrazapata == $concepto){
                $precio_manodeobrazapata = $precio;
                $unidad_manodeobrazapata = $unidad;
            } 
            else if($Manodeobrazapatacorrida == $concepto){
                $precio_manodeobrazapatacorrida = $precio;
                $unidad_manodeobrazapatacorrida = $unidad;
            } 
            else if($Manodeobraformas == $concepto){
                $precio_manodeobraformas = $precio;
                $unidad_manodeobraformas = $unidad;
            } 
            else if($Manodeobracadenas == $concepto){
                $precio_manodeobracadenas = $precio;
                $unidad_manodeobracadenas = $unidad;
            } 
            else if($Manodeobracompactado == $concepto){
                $precio_manodeobracompactado = $precio;
                $unidad_manodeobracompactado = $unidad;
            } 
            else if($Manodeobrafirme == $concepto){
                $precio_manodeobrafirme = $precio;
                $unidad_manodeobrafirme = $unidad;
            } 
        }  
    }
?>