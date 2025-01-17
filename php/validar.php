<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    if (empty($usuario) || empty($password)) {
        echo '<div class="alert alert-danger" role="alert">Por favor, completa todos los campos.</div>';
        exit();
    }

    // Usar sentencias preparadas para evitar inyección SQL
    /*$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
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
}*/

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {

            $_SESSION['usuario'] = $user['usuario'];
            $_SESSION['nombres'] = $user['nombres'];

            // Redirigo al dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>';
    }
}
// cerrar la consulta
$stmt->close();
$conexion->close(); //cerrar la conexion
?>