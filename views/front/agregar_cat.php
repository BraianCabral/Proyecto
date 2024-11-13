<?php

include '../../models/conexion.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
} else {
  $rol_id = $_SESSION['rol_id'];
  if (!$rol_id == 1) {
    //Si no sos admin te llevo al login    
    header("Location: ../../index.php");
    exit;
  }
}

$sql = "SELECT * FROM categorias";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Noticias</title>
</head>

<body class="gradient-custom">

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


    <div class="bg-dark bg-opacity-50 rounded-4 container">
        <div class="m-5 p-3">
          <h2 class="text-light text-center">Agregar categoria</h2>
          <hr class="w-75 mx-auto m-5">
            <form method="POST" action="../../controllers/agregar_categoria.php">
                <div>
                    <input type="text" class="form-control bg-transparent border-light" placeholder="Categoria" id="nombre" name="nombre" required>
                </div>
                <button type="submit" class="btn mt-4 btn-light mb-4" role="button">Agregar Categoria</button>
            </form>
        </div>
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

<?php
$conn->close();
?>