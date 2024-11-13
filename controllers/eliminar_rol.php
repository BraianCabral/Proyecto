<?php

include '../models/conexion.php';

$id = $_GET['id'];
if ($id != 1) {
    $sql = "DELETE FROM roles WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: ../views/front/dashboard_admin.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error eliminando registro: " . $conn->error . "</div>";
    }
}