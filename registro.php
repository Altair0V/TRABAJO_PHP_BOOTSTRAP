<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo_PHP_BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d91e18;">
  <div class="container-fluid">
    <a class="navbar-brand" href="Trabajo_index.php">
      <img src="imag/logo_2.jpg" alt="Logo" width="125" height="80">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="productos.php">PRODUCTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inventario.php">INVENTARIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="registro.php">REGISTRO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5" style="max-width: 550px;">
  <h3 class="text-center text-danger mb-4">REGISTRO DE USUARIOS</h3>
  <form method="POST" action="" class="p-4 border rounded shadow-sm bg-light">
    <div class="mb-3">
      <label class="form-label">Nombre completo</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Correo electrónico</label>
      <input type="email" name="correo" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Teléfono</label>
      <input type="text" name="telefono" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Ciudad</label>
      <input type="text" name="ciudad" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" name="registrar" class="btn btn-danger w-100">Registrar</button>
  </form>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>