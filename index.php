<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="estilos/styles.css">
<header class="header-section">
    <div class="container text-center text-white">
        <h1 class="display-4 font-black-bold">Bienvenido a nuestra Librería Online</h1>
        <p class="lead">Descubre miles de libros y autores en nuestra plataforma. Compra, explora y conoce más sobre el fascinante mundo literario.</p>
        
        <a href="pages/autores.php" class="btn btn-outline-light btn-lg mt-3">Empieza Ahora📚</a>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm" style="min-height: 350px;">
                    <img src="assets/images/books.png" class="card-img-top" alt="Variedad de libros" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Variedad de Libros</h5>
                        <p class="card-text">Tenemos una extensa colección de libros de diferentes géneros, desde ficción hasta no ficción.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm" style="min-height: 350px;">
                    <img src="assets/images/authors.png" class="card-img-top" alt="Conoce a los autores" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Conoce a los Autores</h5>
                        <p class="card-text">Accede a información sobre tus autores favoritos y descubre nuevas voces literarias.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm" style="min-height: 350px;">
                    <img src="assets/images/community.png" class="card-img-top" alt="Únete a nuestra comunidad" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Únete a nuestra Comunidad</h5>
                        <p class="card-text">Participa en discusiones y recomendaciones literarias con otros amantes de los libros.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h2 class="mb-4">¿Tienes preguntas? ¡Contáctanos!</h2>
        <a href="pages/contacto.php" class="btn btn-light btn-lg">Contáctanos</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>
