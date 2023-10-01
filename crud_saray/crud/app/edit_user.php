<?php
// Importamos las clases necesarias
include_once 'User.php'; 
// Verificamos si se ha proporcionado un ID de usuario
if (!isset($_GET['id'])) {
    die('No se proporcionó un ID de usuario para editar');
}

// Instanciamos las clases
$user = new User();

// Obtenemos el ID del usuario a editar
$id_to_edit = $_GET['id'];

// Obtenemos los datos actuales del usuario
$current_user_data = $user->getUserById($id_to_edit);

// Si el formulario ha sido enviado, actualizamos el usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    // Actualizamos el usuario en la base de datos
    $user->updateUser($id_to_edit, $username, $email, $age);
    
    // Redirigimos al usuario a la lista de usuarios
    header("Location: user_list.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <!-- Incluir Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Formulario de Edición</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $current_user_data['username']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $current_user_data['email']; ?>">
        </div>
        <div class="form-group">
            <label for="age">Edad</label>
            <input type="number" name="age" id="age" class="form-control" value="<?php echo $current_user_data['age']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
