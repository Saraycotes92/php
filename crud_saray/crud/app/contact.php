<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Tu dirección de correo a la que se enviarán los mensajes
    $to = "tuemail@example.com";

    // Encabezados adicionales
    $headers = "From: $name <$email>";

    // Enviar el correo
    if(mail($to, "Nuevo mensaje de $name", $message, $headers)) {
        $successMsg = "¡Mensaje enviado exitosamente!";
    } else {
        $errorMsg = "Hubo un error al enviar el mensaje. Inténtalo de nuevo más tarde.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        <h2>Contacto</h2>
        <p>Si tienes alguna pregunta, no dudes en enviarnos un mensaje.</p>
        
        <?php
        if (isset($successMsg)) {
            echo '<div class="alert alert-success">' . $successMsg . '</div>';
        }
        if (isset($errorMsg)) {
            echo '<div class="alert alert-danger">' . $errorMsg . '</div>';
        }
        ?>

        <!-- Formulario de Contacto -->
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
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
