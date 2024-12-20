<?php

include 'models/conexion.php';
session_start();

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco Nacional del Sur</title>

  <link rel="stylesheet" href="public/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/ctas/cta-1/assets/css/cta-1.css">


</head>

<body class="gradient-custom">

  <?php

if ($_SESSION)
    echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">Banco Nacional del Sur</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="views/front/dashboard.php">Panel</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="views/front/noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="views/front/servicios.php">Servicios</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link" href="views/front/contacto.php">Contacto</a>
      </li>
      </li>
    </ul>
    <a href="controllers/logout.php" class="btn btn-light">Cerrar Sesión</a>
  </div>
</div>
</nav>
    ';
else
    echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">Banco Nacional del Sur</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="views/front/noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="views/front/servicios.php">Servicios</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link" href="views/front/contacto.php">Contacto</a>
      </li>
      </li>
    </ul>
    <a href="views/front/login.php" class="btn btn-light">Iniciar Sesión</a>
  </div>
  </div>
</div>
</nav>
'
?>

  <div id="carouselExampleInterval" class="carousel slide m-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="public/img/union.jpg" class="d-block w-100 rounded-4" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
          <h4>Para todas las personas</h4>
          <p>En nuestro banco les brindamos un ambiente familiar.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="public/img/playa.jpg" class="d-block w-100 rounded-4" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
          <h4>Necesita unas vacaciones?</h4>
          <p>Vacaciones soñadas, trámite sencillo. Solicita tu préstamo en línea.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="public/img/ecomerce.jpg" class="d-block w-100 rounded-4" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
          <h4>Busque una mano experta</h4>
          <p>Nuestros empledos estan capacitados profesionalmente para ayudarlo.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <hr class="m-5">

  <h1 class="m-5 display-5 text-center">Todo lo que necesitas...</h1>
  <div class="columns text-light mb-5 text-center lead fs-7">
    <h3>Seguridad y confianza</h3>
    <p>Nuestro banco te ofrece un lugar seguro para guardar tu dinero. Tus ahorros están protegidos por regulaciones
      financieras, lo que te brinda tranquilidad. Además, contamos con sistemas de seguridad avanzados para
      proteger tu información personal y financiera. Al elegir nuestro banco, estás eligiendo una institución confiable
      con
      una larga trayectoria.</p>
    <h3>Gestión financiera</h3>
    <p>Nuestro banco te proporciona las herramientas necesarias para administrar tus finanzas de manera eficiente. Con
      una
      cuenta bancaria, puedes realizar transferencias, pagos, consultar saldos y llevar un control de tus gastos.
      Tambien
      te ofrecemos una aplicacion móvil y servicios en línea que te permitan realizar operaciones bancarias desde
      cualquier lugar y en cualquier momento.</p>
    <h3>Servicios adicionales</h3>
    <p>Más allá de las operaciones básicas, Nuestro banco te ofrece una amplia gama de servicios adicionales para
      satisfacer
      tus necesidades. Puedes solicitar tarjetas de crédito y débito, solicitar préstamos, invertir tu dinero, contratar
      seguros y obtener asesoramiento financiero personalizado. Al elegir nuestro banco, tienes acceso a un ecosistema
      de
      servicios que te facilitan la vida.</p>
  </div>

  <hr class="w-75 mx-auto m-5">

  <h1 class="m-5 display-5 text-center">Mantente informado</h1>
  <p class="text-light m-5 text-center lead fs-7">Mantenerse informado sobre las
    últimas novedades de tu banco es más importante que nunca. Nuestro banco esta constantemente lanzando
    nuevos productos y servicios diseñados para facilitar tu vida y ayudarte a alcanzar tus objetivos financieros.</p>
  <main style="display: flex; justify-content: center; align-items: center; margin: 50px; text-align: center;">
    <div class="card me-5 border border-0 bg-dark bg-opacity-50" style="width: 18rem;">
      <img src="public/img/app.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Descarga la App</h5>
        <p class="card-text">Nuestra app está diseñada con una interfaz intuitiva y segura, te mantendremos
          informado sobre las últimas promociones y novedades a través de notificaciones.</p>
        <a href="views/front/app.php" class="btn btn-outline-light">Descargar</a>
      </div>
    </div>
    <div class="card me-5 border border-0 bg-dark bg-opacity-50" style="width: 18rem;">
      <img src="public/img/seguridad.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">¿Como evitar las estafas?</h5>
        <p class="card-text">En el Banco Nacional del Sur, tu seguridad es nuestra prioridad. Por eso, queremos
          compartir algunos consejos para que puedas protegerte de las estafas.</p>
        <a href="views/front/estafas.php" class="btn btn-outline-light">Mas
          informacion</a>
      </div>
    </div>
    <div class="card border border-0 bg-dark bg-opacity-50" style="width: 18rem;">
      <img src="public/img/trabajo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Profesionales y Negocios</h5>
        <p class="card-text">Entendemos las necesidades de los profesionales y las empresas. Por eso, hemos creado el
          Paquete de productos para los y las Profesionales de Negocios.</p>
        <a href="views/front/paquetepro.php" class="btn btn-outline-light">Descubrir
          paquete</a>
      </div>
    </div>
  </main>

  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3 text-bg-dark" style="color: white;">
      © 2024 Derechos reservados:
      <a class="text-white" href="https://tusitio.com/">
        TuSitio.com</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>