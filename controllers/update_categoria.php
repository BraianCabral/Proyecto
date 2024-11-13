<?php

include('../models/conexion.php');

$nombre = $_POST['nombre'];
$id = $_POST['id'];
$sql = "UPDATE  categorias SET nombre = '$nombre'  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../views/front/dashboard_admin.php");
} else {
    echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
}
