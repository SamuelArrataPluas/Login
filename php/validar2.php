<?php
    session_start(); // Iniciar la sesión
    
    if ($_POST['nombre_apellido'] != null and $_POST['password'] != null){  // validar datos que llegan del formulario
            include_once ('../controlador/sesionModel.php'); // incluir el archivo que contiene la función de registro
            $nombre_apellido = $_POST['nombre_apellido']; // recupara datos del formulario
            $password = $_POST['password']; 

            $verificar = verificar($nombre_apellido, $password); // llamar a a función de verificar

            if ($verificar != null){ // validar si se inserto el registro
                $_SESSION['nombre_apellido'] = $verificar['nombre_apellido']; // guardar el nombre en la sesión
                header('Location: dashboard.php');
                $_SESSION['mensaje'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>Encontrado
                                        <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>"; // mensaje de éxito
            } else{
                $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Usuario o contraseña incorrectos.
                                        <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>"; // mensaje de error

            }
        } else {
            $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Por favor, completa todos los campos.
                                    <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>"; // mensaje de error
        }
        header('Location: ../index.php'); // redireccionar al index
?>