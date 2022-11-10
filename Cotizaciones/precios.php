<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Registro-login/login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../inventario/style-inventario.css?v=1.1">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <link rel="stylesheet" href="style-cot.css?v=1.2">
    <title>Document</title>
</head>

<body style="background-color: #e0e0e0">

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <div class="titulo-prov">
            <img src="../img/cotizador.png" alt="" style="width: auto; height: 60px; margin-bottom: 10px;">
            <h1>Precios</h1>
        </div>
        <?php
            include_once 'barra.php';
        ?>
        <br>

        <div class="contenedor-campo">
                <div class="campo">
                    <p>Buscar: </p>
                    <form action="" method="post">
                    <input type="text" name="campo" id="campo" class="form-control">
                    </form>
                </div>

                <div class="regis">
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="500">500</option>
                    </select>
                   
                </div>
        </div>
        <br>

      <!--  <table class="table" style="background-color: #681319; color:white; margin-bottom: -1px;">
            <thead>
                <th style="font-size: 23px;">
                    Cimiento de mampostería
                </th>
            </thead>
        </table> -->
        <table class="table table-light table-striped">
            <thead>
             <!--<th>Id</th> -->
                <th style="background-color: #681319; color:white; font-size: 20px;">Concepto</th>
                <th style="background-color: #681319; color:white; font-size: 20px;">Precio</th>  
                <th style="background-color: #681319; color:white; font-size: 20px;">Unidad</th>   
                <th style="background-color: #681319; color:white; font-size: 20px;">Editar</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
             <tbody id="content">

            </tbody>
            </table>
    </section>

    <div class="contenedor-paginacion">
    <label id="lbl-total"></label>

    <div id="nav-paginacion" class="paginacion">

    </div>

    </div>


    <script>

        let paginaActual = 1

        /* Llamando a la función getData() */
        getData(paginaActual)

        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", function(){
            getData(1)
        }, false)
        document.getElementById("num_registros").addEventListener("change", function(){
            getData(paginaActual)
        }, false)

        /* Peticion AJAX */
        function getData(pagina) {
            let input = document.getElementById("campo").value
            let num_registros = document.getElementById("num_registros").value

            let content = document.getElementById("content")

            if(pagina != null){
                paginaActual = pagina
            }

            let url = "load-c.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            formaData.append('registros', num_registros)
            formaData.append('pagina', paginaActual)


            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data.data
                    document.getElementById("lbl-total").innerHTML ='Mostrando ' + data.totalFiltro +
                    ' de ' + data.totalRegistros + ' registros'
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion
                }).catch(err => console.log(err))
        }
        </script>
    
</body>
</html>