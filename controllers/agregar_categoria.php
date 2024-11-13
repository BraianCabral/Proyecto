<?php

include('../models/conexion.php');

session_start();

$nombre = $_POST['nombre'];
$sql = "INSERT INTO categorias (nombre) VALUES ('$nombre')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../views/front/dashboard_admin.php");
} else {
    echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
}
