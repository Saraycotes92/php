<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio para Desarrolladores Android</title>
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
    <div class="container mt-5">
        <h1>Bienvenidos a AndroidDev</h1>
        <p>Tu fuente confiable para el desarrollo en Android con Kotlin.</p>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider1.png" class="d-block w-100" alt="Slider Image 1">
                </div>
                <div class="carousel-item">
                    <img src="images/slider2.png" class="d-block w-100" alt="Slider Image 2">
                </div>
                <div class="carousel-item">
                    <img src="images/slider3.png" class="d-block w-100" alt="Slider Image 3">
                </div>
                <div class="carousel-item">
                    <img src="images/slider4.png" class="d-block w-100" alt="Slider Image 4">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h2 class="mt-5">Tutoriales en Video</h2>
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/fis26HvvDII" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AhUL5tHF3uc" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <h2 class="mt-5">Galería de Imágenes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="img-thumbnail img-hover">
                    <img src="images/img1.png" alt="Image 1" class="img-fluid">
                    <div class="img-text">Compose</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-thumbnail img-hover">
                    <img src="images/img2.png" alt="Image 2" class="img-fluid">
                    <div class="img-text">Coroutinas</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-thumbnail img-hover">
                    <img src="images/img3.png" alt="Image 3" class="img-fluid">
                    <div class="img-text">Código facil</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-thumbnail img-hover">
                    <img src="images/img4.png" alt="Image 4" class="img-fluid">
                    <div class="img-text">Android Expert</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-thumbnail img-hover">
                    <img src="images/img5.png" alt="Image 5" class="img-fluid">
                    <div class="img-text">MVVM</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-thumbnail img-hover">
                    <img src="images/img6.png" alt="Image 6" class="img-fluid">
                    <div class="img-text">Aprende Android</div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© 2023 AndroidDev - Todos los derechos reservados.</span>
        </div>
    </footer>

    <a href="register.php" class="btn-floating btn-lg btn-primary" style="position: fixed; bottom: 20px; right: 20px;">Registrarse</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        });
    </script>

    <style>
        .img-hover {
            position: relative;
            overflow: hidden;
        }
        .img-hover img {
            transition: transform .5s;
        }
        .img-hover:hover img {
            transform: scale(1.1);
            filter: brightness(50%);
        }
        .img-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            opacity: 0;
            transition: opacity .5s;
        }
        .img-hover:hover .img-text {
            opacity: 1;
        }
    </style>
</body>
</html>
