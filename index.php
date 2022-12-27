<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Principal/style4.css?v=1.2">
    <link rel="stylesheet" href="./Home/style-home.css?v=1.9">
    <title>Document</title>
</head>
<body>

<div class="home-cont">
    <?php
        include_once './Principal/indexpri.php';
    ?>

    <div  class="sub-cont">
        <div class="imagen">
            <img src="./img/logotipo2_2.png" alt="">
        </div>
        <br><br> <br>
        
        <div class="boton">
            <button class="learn-more">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <a href="./Home/contacto.php"><span class="button-text">Contacto</span></a>
            </button>
        </div>

    </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./Home/slider/11.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-md-block">
        <h5>Diseños Arquitectónicos</h5>
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> </i> Nochistlán, Zac. México</p>
        <p>Nuestro equipo de ingenieros y arquitectos están capacitados para hacer realidad tus sueños con los mejores diseños, minimalista, campestre, californiano, contemporaneo, colonial etc..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Home/slider/22.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Construcción de obras</h5>
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> </i> Nochistlán, Zac. México</p>
        <p>Nuestros ingenieros, arquitectos y constructores estan capacitados para realizar construcciones de calidad.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Home/slider/33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Compra/Venta de casas y terrenos</h5>
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> </i> Nochistlán, Zac. México</p>
        <p>Nuestros asesores te ayudarán a encontrar la mejor opción de adquirir una casa o un terreno en venta.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php
        include_once './Home/footer2.php';
    ?>


</body>
</html>