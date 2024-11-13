<?php

include '../../models/conexion.php';

session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM noticias WHERE id=$id";
$result = $conn->query($sql);
$noticia = $result->fetch_assoc();
$sql2 = "SELECT * FROM comentarios INNER JOIN usuarios ON usuario_id = usuarios.id  WHERE noticia_id=$id ";
$result_comentarios = $conn->query($sql2);

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Noticias</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <li><a class="dropdown-item" href="noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="servicios.php">Servicios</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link" href="../../views/front/contacto.php">Contacto</a>
      </li>
      </li>
    </ul>
    <form method="POST" action="noticias.php" class="d-flex">
      <input name="search" class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Search">
      <button class="btn btn-outline-light me-2" type="submit">Buscar</button>
    </form>
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

    <main>
        <div class="row m-5 text-center">
            <h1><?php
                echo
                $noticia['titulo']
                ?></h1>
            <img class="w-75 m-4 mx-auto d-block" src=<?php echo $noticia['imagen_link'] ?> alt="imagen noticia" />
            <hr class="w-50 mx-auto m-5">
            <p>
                <?php
                echo $noticia['texto']
                ?>
            </p>

        </div>

        <?php
        if ($result_comentarios->num_rows == 0)
            echo "<p class=\"ms-3\">No hay comentarios</p>";
        else {
            while ($comentario = $result_comentarios->fetch_assoc()) {
                echo
                "
                <div class=\"container\">
                 <br />
                 <p> Usuario: " . $comentario['nombre'] . "</p>
                 <p> Comentario: " . $comentario['contenido'] . "</p>
                 </div>
                 ";
            }
        }
        ?>

        </div>
        <?php

        if ($_SESSION && $_SESSION['username'])
            echo '
          <div class="m-5">
            <form method="POST" action="../../controllers/agregar_comentario.php">
               <input type="hidden" id="id" name="noticia_id" value=' . $id . '>
                <div class="form-group container">
                    <label class="fw-bold" for="exampleFormControlTextarea1">Comenta: </label>
                    <textarea class="mt-2 form-control opacity-75 text-light" name="contenido" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="submit" class="btn btn-light mt-3">Enviar Comentario</button>
                    </div>
            </form>
        </div>'
        ?>

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

<?php
$conn->close();
?>