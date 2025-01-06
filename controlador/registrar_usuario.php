<?php
/*if (!empty($_POST["registrar"])) {
    if (empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["gmail"]) or empty($_POST["usuario"]) or empty($_POST["password"])) {
        echo "<el campo esta vacio>";
    } else {

    }
}*/  

/*if (isset($_POST["registrar"])) {
    // Verificar si hay campos vacíos
    if (empty($_POST["nombres"]) || empty($_POST["apellidos"]) || empty($_POST["gmail"]) || empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    } else {
        // Aquí irá el resto del código para registrar al usuario
        echo '<div class="alert alert-success" role="alert">Usuario registrado con éxito.</div>';
    }
}*/

if (isset($_POST["registrar"])) {
    $errores = [];

    if (empty($_POST["nombres"])) {
        $errores[] = "El campo 'Nombre completo' es obligatorio.";
    }

    if (empty($_POST["apellidos"])) {
        $errores[] = "El campo 'Apellido completo' es obligatorio.";
    }

    if (empty($_POST["gmail"])) {
        $errores[] = "El campo 'Correo electrónico' es obligatorio.";
    }

    if (empty($_POST["usuario"])) {
        $errores[] = "El campo 'Usuario' es obligatorio.";
    }

    if (empty($_POST["password"])) {
        $errores[] = "El campo 'Contraseña' es obligatorio.";
    }

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
    } else {
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $gmail = $_POST["gmail"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion->query("INSERT INTO usuarios(nombres, apellidos, gmail, usuario, password) 
                                 VALUES ('$nombres','$apellidos','$gmail','$usuario','$password')");
            if ($sql==true) {
                echo '<div class="alert alert-success" role="alert">Usuario registrado con éxito.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error al registrar</div>';
            }
    }
}
?>
