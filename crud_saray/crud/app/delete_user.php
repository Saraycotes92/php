<?php
// Importamos las clases necesarias
include_once 'Database.php';
include_once 'User.php';

// Verificamos si se ha proporcionado un ID de usuario
if (!isset($_GET['id'])) {
    die('No se proporcionó un ID de usuario para eliminar');
}

// Instanciamos las clases
$database = new Database();
$db = $database->connect();

$user = new User($db);

// Obtenemos el ID del usuario a eliminar
$id_to_delete = $_GET['id'];

// Eliminamos el usuario
$user->deleteUser($id_to_delete);

// Redirigimos al usuario a la lista de usuarios
header('Location: user_list.php');
