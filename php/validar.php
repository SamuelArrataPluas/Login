<?php
/*
$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();

require_once('conexion.php');

$query = "SELECT * FROM usuarios where usuario = '$usuario' AND password ='$password'";
$result = $conexion->query($query);
if ($result==true) {
    echo '<div class="alert alert-success" role="alert">Usuario se encuentra</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">No se encontro usuario</div>';
}
*/

session_start();
require_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    if (empty($usuario) || empty($password)) {
        echo '<div class="alert alert-danger" role="alert">Por favor, completa todos los campos.</div>';
        exit();
    }

    // Usar sentencias preparadas para evitar inyección SQL
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Guardar información del usuario en la sesión
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['nombres'] = $user['nombres'];

        // Redirigir a una página protegida
        header("Location: dashboard.php");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>';
    }
}

?>