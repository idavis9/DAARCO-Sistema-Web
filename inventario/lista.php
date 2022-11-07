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
    <link rel="stylesheet" href="style-inventario.css?v=1.1">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.2">
    <title>Document</title>
</head>

<body style="background-color: #e0e0e0">

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <div class="titulo-prov">
            <img src="../img/inventario.png" alt="" style="width: auto; height: 60px;">
            <h1>Inventario</h1>
        </div>
        <div class="boton-crear">
        <a href="inventario.php" class="btn btn-dark">Añadir Inventario +</a>
        </div>

        <div class="contenedor-campo">
                <div class="campo">
                    <p>Buscar: </p>
                    <form action="" method="post">
                    <input type="text" name="campo" id="campo" class="form-control" value=<?php echo htmlspecialchars($_SESSION["username"]); ?>>
                    </form>
                </div>

                <div class="campo2">
                    <p>Mostrar: </p>
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="10">10</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                    </select>
                    <p style="margin-left: 10px;">Registros</p>
                </div>
        </div>
        <br>

        <table class="table table-dark table-striped-columns">
            
            <thead>
             <!--<th>Id</th> -->
                <th>Concepto</th>
                <th>Precio</th>  
                <th>Cantidad</th>   
                <th>Total</th>
                <th>Unidad</th>
                <th>Descripcion</th>
                <th>Acciones</th>
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

            let url = "load-i.php"
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