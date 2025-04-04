<?php
include('../config/db.php');

$sql = "SELECT * FROM autores";
$stmt = $conn->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-section {
    background-image: url('../Aseets/autores.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    padding: 150px 0;
}

.custom-bg {
    background-color:rgba(6, 4, 81, 0.419);
  }
  
  .custom-text {
    color:rgb(246, 238, 238); 
  }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Mar & libros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="../pages/libros.php">Libros</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/autores.php">Autores</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="header-section">
    <div class="container text-center text-white-bold">
    <h1>Autores</h1>
    <p class="lead">Aquí puedes encontrar todos los autores registrados en nuestra librería.</p>
    </div>
</header>

<div class="container mt-5">
    <div class="row">
        <?php foreach ($autores as $autor): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                <img src="../Aseets/autores2.jpg" class="card-img-top" alt="Foto de <?= $autor['nombre']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $autor['nombre'] . ' ' . $autor['apellido']; ?></h5>
                        <p class="card-text"><strong>Teléfono:</strong> <?= $autor['telefono']; ?></p>
                        <a href="#" class="btn btn-primary">Ver libros</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    
        <footer class="py-5 custom-bg custom-text text-center">
        <p>&copy; 2025 Libreria Mar & Libreria.</p>
        <ul class="list-unstyled">
            <li><a href="contacto.php" class="text-white">Contáctanos</a></li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
