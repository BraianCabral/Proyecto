<?php

include('../models/conexion.php');

$id = $_GET['id'];
$sql = "DELETE FROM categorias WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../views/front/dashboard_admin.php");
} else {
    echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
}
