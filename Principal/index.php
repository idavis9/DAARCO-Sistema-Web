<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>DAARCO</title>
</head>
<body>
    
<!-- Sección de Pc  -->
<header class="header">

        <div class="logo">
          <a href="../Home/index.php">
            <img src="../img/logotipo2.png" alt="Logo de la marca">
          </a>
        </div>

        <nav class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li>
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" style="border: none;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                       Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Arquitectura</a></li>
                      <li><a class="dropdown-item" href="#">Construcción</a></li>
                      <li><a class="dropdown-item" href="#">Venta de materiales</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
        </nav>

        <div class="Botones">
            <a class="btn" href="../Registro-Login/login.php"><button>Iniciar Sesión</button></a>
            <a class="btn2" href="../Registro-Login/registro.php"><button>Regístrate</button></a>
        </div>




  <!-- Sección de Tablet y Movil -->

  <div class="Movil">
    <nav class="navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <img style="width: auto; height: 60px;" src="../img/logotipo3.png" alt="Logo de la marca">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

            <div class="offcanvas-body">
              <a class="nav-link" href="#" >Inicio</a> 
              <div class="dropdown">
                    <a class="btn dropdown-toggle" style="border: none; color: white; margin-top: 10px; margin-left: -16px;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                       Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Arquitectura</a></li>
                      <li><a class="dropdown-item" href="#">Construcción</a></li>
                      <li><a class="dropdown-item" href="#">Venta de materiales</a></li>
                    </ul>
                  </div>
              <a class="nav-link" href="#" style="margin-top: 10px;">Nosotros</a> 
              <a class="nav-link" href="#" style="margin-top: 15px;">Contacto</a> <br>
              
            <a class="btn" href="../Registro-Login/login.php" style="border: none;"><button>Iniciar Sesión</button></a>
            <a class="btn2" href="../Registro-Login/registro.php" style="border: none;"><button>Regístrate</button></a>
       
            </div>
       </div>
     </nav>
  </div>

</header>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>