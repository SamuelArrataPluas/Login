<?php
    session_start(); // Iniciar la sesión
    
    if ($_POST ['usuario'] != null and $_POST['password'] != null){  // validar datos que llegan del formulario
            include_once ('../controlador/sesionModel.php'); // incluir el archivo que contiene la función de registro
            $usuario = $_POST['usuario']; // recupara datos del formulario
            $password = $_POST['password']; 

            $verificar = verificar($usuario, $password); // llamar a a función de verificar

            if ($verificar != null){ // validar si se inserto el registro
                $_SESSION['usuario'] = $verificar['usuario']; // mensaje de éxito
                header('Location: dashboard.php');
            } else{
                $_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>Usuario o contraseña incorrectos.</div>"; // mensaje de error

            }
        } else {
            $_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>Por favor, completa todos los campos.</div>"; // mensaje de error
        }
        header('Location: ../index.php'); // redireccionar al index
?>