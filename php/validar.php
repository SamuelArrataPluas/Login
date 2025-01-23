<?php
    session_start(); // Iniciar la sesión

    if ($_POST ['nombres'] != null and $_POST['apellidos'] != null and $_POST['gmail'] != null and $_POST['usuario'] != null and $_POST['password'] != null){    // validar datos que llegan del formulario
        include_once ('../controlador/sesionModel.php'); // incluir el archivo que contiene la función de registro
        $nombres = $_POST['nombres']; // recupara datos del formulario
        $apellidos = $_POST['apellidos'];
        $gmail = $_POST['gmail'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $datosRepetidos = datosRepetidos($gmail, $usuario); // llamar a a función de verificar datos repetidos

        if ($datosRepetidos == 1){
            $_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>El correo electrónico o el usuario ya están registrados.</div>"; // mensaje de error
        } else {
            $registro = registro($nombres, $apellidos, $gmail, $usuario, $password); // llamar a a función de registro

            if ($registro != null){ // validar si se inserto el registro
                $_SESSION['mensaje'] = "<div class='alert alert-success' role='alert'>Registro exitoso.</div>"; // mensaje de éxito
            } else{
                $_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>Error al registrar.</div>"; // mensaje de error
            }
        }
    } else {
        $_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>Por favor, completa todos los campos.</div>"; // mensaje de error
    }
    header('Location: ../registro.php'); // redireccionar al index
?>
