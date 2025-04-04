<?php
include('../config/db.php');
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (NOW(), ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute([$correo, $nombre, $asunto, $comentario])) {
        $mensaje = "Mensaje enviado correctamente.";
    } else {
        $mensaje = "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/contacto.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Mar & libros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="libros.php">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="autores.php">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="contact-container">
        <div class="contact-image"></div>
        <div class="contact-form">
            <h1>Contacto</h1>
            <?php if ($mensaje): ?>
                <div class="alert alert-info"> <?php echo $mensaje; ?> </div>
            <?php endif; ?>
            <form action="contacto.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required>
                </div>
                <div class="mb-3">
                    <label for="comentario" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark w-100">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</body>
<script src="../Scripts/validacion.js"></script>
</html>
