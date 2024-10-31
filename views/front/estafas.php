<?php

include '../../models/conexion.php';
session_start();

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¿Como evitar las estafas?</title>

  <link rel="stylesheet" href="../../public/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="gradient-custom">

<?php

if ($_SESSION)
    echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="../../index.php">Banco Nacional del Sur</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="../../views/front/dashboard.php">Panel</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="../../views/front/noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="../../views/front/servicios.php">Servicios</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link" href="../../views/front/contacto.php">Contacto</a>
      </li>
      </li>
    </ul>
    <a href="../../controllers/logout.php" class="btn btn-light">Cerrar Sesión</a>
  </div>
</div>
</nav>
    ';
else
    echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="../../index.php">Banco Nacional del Sur</a>
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
          <li><a class="dropdown-item" href="../../views/front/noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="../../views/front/servicios.php">Servicios</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link" href="../../views/front/contacto.php">Contacto</a>
      </li>
      </li>
    </ul>
    <a href="../../views/front/login.php" class="btn btn-light">Iniciar Sesión</a>
  </div>
</div>
</nav>
'
?>

  <div class="estafas p-5">
    <img class="border border-light-subtle rounded mt-2 mb-5 w-75" src="../../public/img/estafas.jpg" />
    <h3>El auge de las estafas en la era digital</h3>
    <p>Las estafas bancarias han evolucionado con la tecnología, aprovechando la creciente dependencia de los servicios
      financieros en línea. Los ciberdelincuentes emplean tácticas cada vez más sofisticadas para engañar a los usuarios
      y obtener acceso a sus cuentas bancarias. Desde correos electrónicos fraudulentos que imitan a instituciones
      financieras hasta llamadas telefónicas donde supuestos empleados solicitan información confidencial, las
      modalidades de fraude son diversas y constantes.</p>
    <hr class="w-75 mx-auto m-5">
    <img class="rounded-4 float-start p-2" src="../../public/img/seguridad2.jpg" />
    <p>La proliferación de las estafas bancarias exige una mayor conciencia y precaución por parte de los usuarios. Es
      fundamental estar alerta ante cualquier comunicación sospechosa y verificar la identidad del remitente antes de
      proporcionar datos personales o financieros. Además, es recomendable utilizar contraseñas seguras y únicas para
      cada plataforma, y habilitar la autenticación de dos factores para agregar una capa adicional de seguridad a las
      cuentas.</p>
    <p>Los bancos, por su parte, desempeñan un papel crucial en la prevención de las estafas. Implementar sistemas de
      seguridad robustos, educar a los clientes sobre las tácticas de fraude más comunes y ofrecer herramientas para
      detectar y reportar actividades sospechosas son acciones clave para proteger a los usuarios. Asimismo, es
      importante que las instituciones financieras colaboren con las autoridades para combatir este tipo de delitos y
      llevar a los delincuentes ante la justicia.</p>
    <hr class="w-75 mx-auto m-5">
    <img class="rounded-4 float-end p-2" src="../../public/img/seguridad3.jpg" />
    <p>Las estafas telefónicas se han convertido en una amenaza cada vez más común en la era digital. Los delincuentes
      utilizan diversas tácticas para engañar a sus víctimas, desde hacerse pasar por representantes de bancos o
      empresas conocidas hasta ofrecer premios falsos o solicitar información personal confidencial. Estas llamadas
      suelen ser automatizadas o contar con guiones preestablecidos, y los estafadores emplean técnicas de ingeniería
      social para generar confianza y urgencia en sus interlocutores. Es fundamental mantener la guardia alta y no
      proporcionar datos sensibles a desconocidos, ya que las consecuencias de caer en estas estafas pueden ser graves,
      desde pérdidas económicas hasta el robo de identidad.</p>
    <p>Para protegerse de estas amenazas, es importante estar informado sobre las últimas modalidades de estafa y tomar
      medidas preventivas. Algunas recomendaciones incluyen no responder a llamadas de números desconocidos, verificar
      la identidad del interlocutor antes de compartir cualquier información, desconfiar de ofertas demasiado buenas
      para ser ciertas y denunciar cualquier actividad sospechosa a las autoridades. Además, es recomendable utilizar
      aplicaciones de bloqueo de llamadas y activar las funciones de identificación de llamadas sospechosas que ofrecen
      muchos dispositivos móviles. La prevención es la mejor arma contra las estafas telefónicas, y al tomar medidas
      sencillas podemos reducir significativamente el riesgo de ser víctimas de estos delitos</p>
  </div>

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