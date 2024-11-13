<?php

include '../models/conexion.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $rol = $_POST['rol'];

    $sql = "INSERT INTO roles(nombre) VALUES ('$rol')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/front/dashboard_admin.php");
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    $rol_id = $_POST['rol_id'];


    $sql = "INSERT INTO roles(nombre) VALUES ('$rol')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/front/dashboard_admin.php");
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}
