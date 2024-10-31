<?php 

include '../../models/conexion.php'; 

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="gradient-custom">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">Banco Nacional del Sur</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <section class="vh-300 gradient-custom m-5">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark bg-opacity-50 text-white border border-0" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div>

              <h2 class="fw-bold mb-2 text-uppercase">Inicia sesión</h2>
              <p class="text-white mb-5">Por favor ingresa tu usuario y contraseña!</p>
              <form method="POST" action="login.php">

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control form-control-lg border-light bg-transparent" id="username" name="username" required>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4 pb-5">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control form-control-lg border-light bg-transparent" id="password" name="password" required>
              </div>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg px-3" type="submit">Iniciar sesión</button>

              <p class="mb-0 pt-5">¿No tienes una cuenta? <a href="register_login.php" class="text-white fw-bold">Regístrate</a></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE nombre = '$username'";
        $result = $conn->query($sql);
        //Verifico que me este trayendo un usuario
        if ($result->num_rows > 0) {

            $user = $result->fetch_assoc();
            if (password_verify($password, $user['contraseña'])) {
                //Estoy asignando un usuario a la sesion
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $user['id'];
                $_SESSION['rol_id'] = $user['rol_id'];
                header("Location: dashboard.php");
            } else {
                echo "<div class='alert text-dark bg-light text-center m-5'>Contraseña incorrecta</div>";
            }
        } 
        else {
            echo "<div class='alert text-dark bg-light text-center m-5'>Usuario no encontrado</div>";
        }
    }
    ?>

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