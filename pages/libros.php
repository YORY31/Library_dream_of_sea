<?php
include('../config/db.php');

$sql = "SELECT * FROM titulos";
$stmt = $conn->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <style>
        .header-section {
    background-image: url('../Aseets/LibroPortada.jpg'); /* Ruta de la imagen */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    padding: 150px 0;

    
}

.custom-bg {
    background-color:rgba(6, 4, 81, 0.419); /* Color naranja personalizado */
  }
  
  .custom-text {
    color:rgb(246, 238, 238); /* Color verde personalizado */
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
    <h1>Listado de libros</h1>
    <p class="lead">Aquí puedes encontrar todos los libros disponible en nuestra librería.</p>
    </div>
</header>

    <div class="container mt-5">
    <div class="row">
        <?php foreach ($libros as $libro): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="../Aseets/libro.jpg" class="card-img-top" alt="Portada de <?= $libro['titulo']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $libro['titulo']; ?></h5>
                        <p class="card-text"><strong>Tipo:</strong> <?= $libro['tipo']; ?></p>
                        <p class="card-text"><strong>Editorial:</strong> <?= $libro['id_pub']; ?></p>
                        <p class="card-text"><strong>Precio:</strong> $<?= number_format($libro['precio'], 2); ?></p>
                        <p class="card-text"><strong>Ventas Totales:</strong> <?= $libro['total_ventas']; ?></p>
                        <p class="card-text"><strong>Notas:</strong> <?= $libro['notas']; ?></p>
                        <p class="card-text"><strong>Fecha de Publicación:</strong> <?= date("d-m-Y", strtotime($libro['fecha_pub'])); ?></p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


    <footer class="py-5 custom-bg custom-text text-center">
        <p>&copy;  2025 Libreria Mar & Libreria.</p>
        <ul class="list-unstyled">
            <li><a href="contacto.php" class="text-white">Contáctanos</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
