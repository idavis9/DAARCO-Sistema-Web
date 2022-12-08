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
           $total3 = 0;
           $total4 = 0;
           $total5 = 0;
           $total6 = 0;
           $total7 = 0;
           $total8 = 0;
           $total9 = 0;

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
           $Anillos1520 = "Anillos 15 x 20";
           $Anillos1020 = "Anillos 10 x 20";
           $Anillos2020 = "Anillos 20 x 20";
           $Anillos3030 = "Anillos 30 x 30";
           $Anillos4040 = "Anillos 40 x 40";
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
           $Manodeobracadenas = "Mano de obra cadenas";
           $Manodeobracompactado= "Mano de obra compactado";
           $Angulo = "Angulo";
           $Manodeobraformas15cm = "Mano de obra formas 15cm";
           $Manodeobraformas20cm = "Mano de obra formas 20cm";
           $Manodeobracastillo10x10 = "Mano de obra castillo 10 x 10";
           $Manodeobracastillo10x15 = "Mano de obra castillo 10 x 15";
           $Manodeobracolumna15x30 = "Mano de obra columna 15 x 30";
           $Manodeobracolumna20x30 = "Mano de obra columna 20 x 30";
           $Manodeobracolumna30x30 = "Mano de obra columna 30 x 30";
           $Manodeobracolumna40x40 = "Mano de obra columna 40 x 40";
           $Manodeobracolumna50x50 = "Mano de obra columna 50 x 50";
           $Manodeobrafirme8cm = "Mano de obra firme 8cm";
           $Manodeobrafirme10cm = "Mano de obra firme 10cm";
           $Manodeobraestampado = "Mano de obra estampado";
           $Manodeobramuro = "Mano de obra muro";
           $Manodeobrabovedaadobon = "Mano de obra boveda adobon";
           $Camiondeescombro = "Camion de escombro";
           $Sellador = "Sellador";
           $Manodeobrarepararenjarre = "Mano de obra reparar enjarre";
           $Manodeobraenjarreregleado = "Mano de obra enjarre regleado";
           $Manodeobraenjarrepulido = "Mano de obra enjarre pulido";
           $Pulidoespejo = "Pulido espejo";
           $Manodeobrapulidoespejo = "Mano de obra pulido espejo";
           $Textura = "Textura";
           $Manodeobratextura = "Mano de obra textura";
           $Yeso = "Yeso";
           $Moldurasyeso = "Molduras yeso";
           $Manodeobrayeso = "Mano deobra yeso";
           $Manodeobramoldurasyeso = "Mano de obra molduras yeso";
           $Fachaleta = "Fachaleta";
           $Pegapiedra = "Pega piedra";
           $Manodeobrafachaleta = "Mano de obra fachaleta";
           $Piedra = "Piedra";
           $Boquilla = "Boquilla";
           $Manodeobrapiedra = "Mano de obra piedra";
           $Barniz = "Barniz";
           $Azulejo = "Azulejo";
           $Piso = "Piso";
           $Pegazulejo = "Pegazulejo";
           $Pegapiso = "Pegapiso";
           $Manodeobraazulejo = "Mano de obra azulejo";
           $Manodeobrapiso = "Mano de obra piso";
           $Pisorectificado = "Piso rectificado";
           $Soclo = "Soclo";
           $Manodeobrapisorectificado = "Mano de obra piso rectificado";
           $Manodeobrasoclo = "Mano de obra soclo";

           //Obteniendo los metros para los calculos:
         /* if($_POST){
            $metros1 = $_POST['metros1'];
            $piezas1 = $_POST['piezas1'];
            $piezas2 = $_POST['piezas2'];
            $metros2 = $_POST['metros2'];
            $metros3 = $_POST['metros3'];
            $metros4 = $_POST['metros4'];
            $metros5 = $_POST['metros5'];
            $metros6 = $_POST['metros6'];
            $metros7 = $_POST['metros7'];
           }  */


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
            else if($Anillos1520 == $concepto){
                $precio_anillos1520 = $precio;
                $unidad_anillos1520 = $unidad;
            } 
            else if($Anillos1020 == $concepto){
                $precio_anillos1020 = $precio;
                $unidad_anillos1020 = $unidad;
            } 
            else if($Anillos2020 == $concepto){
                $precio_anillos2020 = $precio;
                $unidad_anillos2020 = $unidad;
            } 
            else if($Anillos3030 == $concepto){
                $precio_anillos3030 = $precio;
                $unidad_anillos3030 = $unidad;
            } 
            else if($Anillos4040 == $concepto){
                $precio_anillos4040 = $precio;
                $unidad_anillos4040 = $unidad;
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
            else if($Manodeobracadenas == $concepto){
                $precio_manodeobracadenas = $precio;
                $unidad_manodeobracadenas = $unidad;
            } 
            else if($Manodeobracompactado == $concepto){
                $precio_manodeobracompactado = $precio;
                $unidad_manodeobracompactado = $unidad;
            } 
            else if($Angulo == $concepto){
                $precio_angulo = $precio;
                $unidad_angulo = $unidad;
            } 
            else if($Manodeobraformas15cm == $concepto){
                $precio_manodeobraformas15cm = $precio;
                $unidad_manodeobraformas15cm = $unidad;
            } 
            else if($Manodeobraformas20cm == $concepto){
                $precio_manodeobraformas20cm = $precio;
                $unidad_manodeobraformas20cm = $unidad;
            } 
            else if($Manodeobracastillo10x10 == $concepto){
                $precio_manodeobracastillo10x10 = $precio;
                $unidad_manodeobracastillo10x10 = $unidad;
            } 
            else if($Manodeobracastillo10x15 == $concepto){
                $precio_manodeobracastillo10x15 = $precio;
                $unidad_manodeobracastillo10x15 = $unidad;
            } 
            else if($Manodeobracolumna15x30 == $concepto){
                $precio_manodeobracolumna15x30 = $precio;
                $unidad_manodeobracolumna15x30 = $unidad;
            } 
            else if($Manodeobracolumna20x30 == $concepto){
                $precio_manodeobracolumna20x30 = $precio;
                $unidad_manodeobracolumna20x30 = $unidad;
            } 
            else if($Manodeobracolumna30x30 == $concepto){
                $precio_manodeobracolumna30x30 = $precio;
                $unidad_manodeobracolumna30x30 = $unidad;
            } 
            else if($Manodeobracolumna40x40 == $concepto){
                $precio_manodeobracolumna40x40 = $precio;
                $unidad_manodeobracolumna40x40 = $unidad;
            } 
            else if($Manodeobracolumna50x50 == $concepto){
                $precio_manodeobracolumna50x50 = $precio;
                $unidad_manodeobracolumna50x50 = $unidad;
            } 
            else if($Manodeobrafirme8cm == $concepto){
                $precio_manodeobrafirme8cm = $precio;
                $unidad_manodeobrafirme8cm = $unidad;
            } 
            else if($Manodeobrafirme10cm == $concepto){
                $precio_manodeobrafirme10cm = $precio;
                $unidad_manodeobrafirme10cm = $unidad;
            } 
            else if($Manodeobraestampado == $concepto){
                $precio_manodeobraestampado = $precio;
                $unidad_manodeobraestampado = $unidad;
            } 
            else if($Manodeobramuro == $concepto){
                $precio_Manodeobramuro = $precio;
                $unidad_Manodeobramuro = $unidad;
            } 
            else if($Manodeobrabovedaadobon == $concepto){
                $precio_manodeobrabovedaadobon = $precio;
                $unidad_manodeobrabovedaadobon = $unidad;
            } 
            else if($Camiondeescombro == $concepto){
                $precio_Camiondeescombro = $precio;
                $unidad_Camiondeescombro = $unidad;
            } 
            else if($Sellador == $concepto){
                $precio_sellador = $precio;
                $unidad_sellador = $unidad;
            } 
            else if($Manodeobrarepararenjarre == $concepto){
                $precio_manodeobrarepararenjarre = $precio;
                $unidad_manodeobrarepararenjarre = $unidad;
            } 
            else if($Manodeobraenjarreregleado == $concepto){
                $precio_manodeobraenjarreregleado = $precio;
                $unidad_manodeobraenjarreregleado = $unidad;
            } 
            else if($Manodeobraenjarrepulido == $concepto){
                $precio_manodeobraenjarrepulido = $precio;
                $unidad_manodeobraenjarrepulido = $unidad;
            } 
            else if($Pulidoespejo == $concepto){
                $precio_pulidoespejo = $precio;
                $unidad_pulidoespejo = $unidad;
            } 
            else if($Manodeobrapulidoespejo == $concepto){
                $precio_manodeobrapulidoespejo = $precio;
                $unidad_manodeobrapulidoespejo = $unidad;
            } 
            else if($Manodeobratextura == $concepto){
                $precio_manodeobratextura = $precio;
                $unidad_manodeobratextura = $unidad;
            } 
            else if($Yeso == $concepto){
                $precio_yeso = $precio;
                $unidad_yeso = $unidad;
            } 
            else if($Moldurasyeso == $concepto){
                $precio_moldurasyeso = $precio;
                $unidad_moldurasyeso = $unidad;
            } 
            else if($Manodeobrayeso == $concepto){
                $precio_manodeobrayeso = $precio;
                $unidad_manodeobrayeso = $unidad;
            } 
            else if($Manodeobramoldurasyeso == $concepto){
                $precio_manodeobramoldurasyeso = $precio;
                $unidad_manodeobramoldurasyeso = $unidad;
            } 
            else if($Fachaleta == $concepto){
                $precio_fachaleta= $precio;
                $unidad_fachaleta = $unidad;
            } 
            else if($Pegapiedra == $concepto){
                $precio_pegapiedra = $precio;
                $unidad_pegapiedra = $unidad;
            } 
            else if($Manodeobrafachaleta == $concepto){
                $precio_manodeobrafachaleta = $precio;
                $unidad_manodeobrafachaleta = $unidad;
            } 
            else if($Piedra == $concepto){
                $precio_piedra = $precio;
                $unidad_piedra = $unidad;
            } 
            else if($Boquilla == $concepto){
                $precio_boquilla = $precio;
                $unidad_boquilla = $unidad;
            } 
            else if($Manodeobrapiedra == $concepto){
                $precio_manodeobrapiedra = $precio;
                $unidad_manodeobrapiedra = $unidad;
            }
            else if($Barniz == $concepto){
                $precio_barniz = $precio;
                $unidad_barniz = $unidad;
            }  
            else if($Azulejo == $concepto){
                $precio_azulejo = $precio;
                $unidad_azulejo = $unidad;
            } 
            else if($Piso == $concepto){
                $precio_piso = $precio;
                $unidad_piso = $unidad;
            } 
            else if($Pegazulejo == $concepto){
                $precio_pegazulejo = $precio;
                $unidad_pegazulejo = $unidad;
            } 
            else if($Pegapiso == $concepto){
                $precio_pegapiso = $precio;
                $unidad_pegapiso = $unidad;
            } 
            else if($Manodeobraazulejo == $concepto){
                $precio_manodeobraazulejo = $precio;
                $unidad_manodeobraazulejo = $unidad;
            } 
            else if($Manodeobrapiso == $concepto){
                $precio_manodeobrapiso = $precio;
                $unidad_manodeobrapiso = $unidad;
            } 
            else if($Pisorectificado == $concepto){
                $precio_pisorectificado = $precio;
                $unidad_pisorectificado = $unidad;
            } 
            else if($Soclo == $concepto){
                $precio_soclo = $precio;
                $unidad_soclo = $unidad;
            } 
            else if($Manodeobrapisorectificado == $concepto){
                $precio_manodeobrapisorectificado = $precio;
                $unidad_manodeobrapisorectificado = $unidad;
            } 
            else if($Manodeobrasoclo == $concepto){
                $precio_manodeobrasoclo = $precio;
                $unidad_manodeobrasoclo = $unidad;
            } 
        
        }  
    }
?>