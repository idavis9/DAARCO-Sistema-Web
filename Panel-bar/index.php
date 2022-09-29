<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-bar2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <!-- Sección de Pc  -->
<header class="header">

<div class="logo">
  <a href="../Registro-Login/panel.php">
    <img src="../img/logotipo2.png" alt="Logo de la marca">
  </a>
</div>

<nav class="nav-links">
        <li><a href="#">Ventas</a></li>
        <li><a href="#">Calculos</a></li>
        <li><a href="#">Cotizaciones</a></li>
        <li><a href="../Proveedores/lista.php">Proveedores</a></li>
        <li><a href="#">Inventario</a></li>
        <li><a href="#">Proyectos</a></li>
        <li>
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" style="border: none;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="../img/perfil-del-usuario.png" alt="" style="width: auto; height: 40px;">
                      <?php echo htmlspecialchars($_SESSION["username"]); ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
                      <li><a class="dropdown-item" href="../Registro-Login/logout.php">Cerrar sesión</a></li>
                    </ul>
                  </div>
                </li>
</nav>





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
    <div class="dropdown">
            <a class="btn dropdown-toggle" style="border: none; color: white; margin-top: 10px; margin-left: -16px;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../img/perfil-del-usuario2.png" alt="" style="width: auto; height: 40px;">
                <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
              <li><a class="dropdown-item" href="../Registro-Login/logout.php">Cerrar sesión</a></li>
            </ul>
          </div>
      <a class="nav-link" href="#" style="margin-top: 10px;" >Ventas</a> 
      <a class="nav-link" href="#" style="margin-top: 10px;">Calculos</a> 
      <a class="nav-link" href="#" style="margin-top: 15px;">Cotizaciones</a> 
      <a class="nav-link" href="../Proveedores/lista.php" style="margin-top: 15px;">Proveedores</a>
      <a class="nav-link" href="#" style="margin-top: 15px;">Inventario</a>
      <a class="nav-link" href="#" style="margin-top: 15px;">Proyectos</a>
      <br>

    </div>
</div>
</nav>
</div>

</header>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>