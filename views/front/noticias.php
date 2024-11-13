<?php

include '../../models/conexion.php';
session_start();

$sql = "SELECT titulo,nombre,texto,imagen_link,noticias.id FROM `noticias` INNER JOIN categorias ON noticias.categoria_id = categorias.id";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST['search'];
    //convierto lo que leo en minusculas
    $search = strtolower($search);
    //$sql = "SELECT * FROM noticias WHERE LOWER(titulo) LIKE '%$search%' ";SELECT * FROM noticias LEFT JOIN categorias ON noticias.categoria_id = categorias.id  WHERE LOWER(titulo) LIKE '%$search% 
    $sql = " SELECT * FROM noticias INNER JOIN categorias ON noticias.categoria_id = categorias.id
     WHERE LOWER(noticias.titulo) LIKE '%$search%' 
     OR 
            LOWER(categorias.nombre) LIKE '%$search%'
      ";
}

$result = $conn->query($sql);

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
          <li><a class="dropdown-item" href="../../views/front/noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="../../views/front/servicios.php">Servicios</a></li>
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
          <li><a class="dropdown-item" href="noticias.php">Noticias</a></li>
          <li><a class="dropdown-item" href="servicios.php">Servicios</a></li>
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

    <div class="container">
        <h1 class="m-5 display-5 text-center">Noticias de Actualidad</h1>
        <div class="row p-5">

            <?php

            if ($result->num_rows == 0) {
                echo '<h6>No hay noticias para mostrar</h6>';
            } 
            else {
                while ($noticia = $result->fetch_assoc()) {
                    echo "
                    <div class=\"col-sm-12 col-md-4 p-4 text-center\">
                        <div class=\"card border border-0 bg-dark bg-opacity-50\" style=\"width: 18rem;\">
                            <img src=\"{$noticia['imagen_link']}\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{$noticia['titulo']}</h5>
                                    <p class=\"card-text\">{$noticia['texto']}</p>
                                    <a href=\"noticia_vista.php?id={$noticia['id']}\" class=\"btn btn-outline-light\">Leer Mas</a>
                                </div>
                        </div>
                    </div>";
                }
            }
            ?>

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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
</body>

</html>