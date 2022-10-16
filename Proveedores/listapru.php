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
    <link rel="stylesheet" href="style-proveedor2.css?v=1.4">
    <link rel="stylesheet" href="../Panel-bar/style-bar2.css?v=1.1">
    <title>Document</title>
</head>

<body>

    <?php
        include_once '../Panel-bar/index.php';
    ?>

    <section id="container">
        <div class="titulo-prov">
            <img src="../img/proveedor.png" alt="" style="width: auto; height: 60px;">
            <h1>Proveedores</h1>
        </div>
        <div class="boton-crear">
        <a href="proveedor.php" class="btn btn-dark">Añadir Proveedor +</a>
        </div>

        <div class="contenedor-campo">
                <div class="campo">
                    <p>Buscar: </p>
                    <form action="" method="post">
                    <input type="text" name="campo" id="campo" class="form-control" value=<?php echo htmlspecialchars($_SESSION["username"]); ?>>
                    </form>
                </div>
        </div>
        <br>

        <table class="table table-dark table-striped-columns">
            
            <thead>
             <!--<th>Id</th> -->
                <th>Nombre de la Empresa</th>
                <th>Descripcion</th>  
                <th>Direccion</th>   
                <th>Telefono</th>
                <th>Nombre del Vendedor</th>
                <th>Telefono del Vendedor</th>
                <th>Email</th>
                <th>Acciones</th>
            </thead>  

             <!-- El id del cuerpo de la tabla. -->
             <tbody id="content">

            </tbody>
            </table>
    </section>


    <script>
        /* Llamando a la función getData() */
        getData()

        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", getData)

        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url = "load.php"
            let formaData = new FormData()
            formaData.append('campo', input)

            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
        </script>
    
</body>
</html>