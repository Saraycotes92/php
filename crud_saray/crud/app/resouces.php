<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos para Desarrolladores Android</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AndroidDev</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resouces.php">Recursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Recursos para Desarrolladores Android</h2>

        <!-- Lista de Recursos en forma de acordeón -->
        <div id="accordion">
    <!-- Herramienta para Android -->
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Herramienta para Android
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body d-flex">
                <img src="images/img1.png" alt="Herramienta para Android" style="max-width: 150px; margin-right: 20px;">
                <p>
                    Las herramientas para desarrollo en Android han avanzado significativamente en los últimos años. Android Studio, por ejemplo, es el IDE oficial que proporciona todo lo necesario para iniciar y mantener proyectos Android. Con una interfaz amigable, integración de emuladores y herramientas de diagnóstico, facilita el proceso de desarrollo y permite a los desarrolladores centrarse en la creación de aplicaciones de alta calidad.
                </p>
            </div>
        </div>
    </div>

    <!-- Biblioteca de Android -->
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Biblioteca de Android
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body d-flex">
                <img src="images/img2.png" alt="Biblioteca de Android" style="max-width: 150px; margin-right: 20px;">
                <p>
                    Las bibliotecas de Android son esenciales para aprovechar al máximo las capacidades de la plataforma. Estas bibliotecas proporcionan funciones y métodos que simplifican tareas complejas y mejoran la eficiencia del desarrollo. Por ejemplo, la biblioteca AndroidX ofrece compatibilidad y componentes modernos que hacen más fácil la implementación de características populares en aplicaciones actuales.
                </p>
            </div>
        </div>
    </div>

    <!-- Tutorial de Android -->
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tutorial de Android
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body d-flex">
                <img src="images/img3.png" alt="Tutorial de Android" style="max-width: 150px; margin-right: 20px;">
                <p>
                    Los tutoriales de Android son una excelente forma de aprender y mejorar tus habilidades en el desarrollo para esta plataforma. Desde la creación de tu primera aplicación hasta la implementación de funciones avanzadas, los tutoriales proporcionan guías paso a paso que ayudan a los desarrolladores a comprender mejor las prácticas recomendadas y las técnicas esenciales para crear aplicaciones exitosas en el ecosistema Android.
                </p>
            </div>
        </div>
    </div>
</div>

    

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© 2023 AndroidDev - Todos los derechos reservados.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
