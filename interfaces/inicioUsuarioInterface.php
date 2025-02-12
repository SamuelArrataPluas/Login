<?php
session_start(); // Iniciar la sesión

if ($_POST['nombre_apellido'] != null && $_POST['password'] != null) {  // Validar datos que llegan del formulario
    include_once('../controlador/sesionModel.php'); // Incluir el archivo que contiene la función de verificación
    $nombre_apellido = $_POST['nombre_apellido']; // Recuperar datos del formulario
    $password = $_POST['password'];

    $verificar = verificar($nombre_apellido, $password); // Llamar a la función de verificación

    if ($verificar != null) { // Validar si el usuario existe y la contraseña es correcta
        $_SESSION['nombre_apellido'] = $verificar['nombre_apellido']; // Guardar el nombre en la sesión
        $_SESSION['mensaje'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>Inicio de sesion
                                <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";// Mensaje de éxito
        header('Location: ../view/dashboard.php'); // Redirigir al dashboard
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Credenciales incorrectos
                                <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>"; // Mensaje de error
        header('Location: ../index.php'); // Redirigir al index
        exit(); // Asegurarse de que el script se detenga después de la redirección
    }
} else {
    $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Completa todos los campos
                            <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>"; // Mensaje de error
    header('Location: ../index.php'); // Redirigir al index
    exit(); // Asegurarse de que el script se detenga después de la redirección
}
?>