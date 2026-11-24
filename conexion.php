<?php
$conection = mysqli_connect("localhost", "root", "", "practico_pacena");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'] ?? '';
    $correo   = $_POST['correo'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $ciudad   = $_POST['ciudad'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "INSERT INTO usuarios (nombre, correo, telefono, ciudad, password) VALUES ('$nombre', '$correo', '$telefono', '$ciudad', '$password')";

    if ($conection->query($sql)) {
        echo "<div class='alert alert-success text-center mt-3'>Registro exitoso</div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>Error al registrar: " . $conection->error . "</div>";
    }
}
?>
