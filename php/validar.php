<?php
    session_start(); // Iniciar la sesión

    if ($_POST['nombre_apellido'] != null and $_POST['correo'] != null and $_POST['password'] != null){    // validar datos que llegan del formulario
        include_once ('../controlador/sesionModel.php'); // incluir el archivo que contiene la función de registro
        $nombre_apellido = $_POST['nombre_apellido']; // recupara datos del formulario
        $gmail = $_POST['correo'];
        $password = $_POST['password'];

        $datosRepetidos = datosRepetidos($nombre_apellido, $gmail); // llamar a a función de verificar datos repetidos

        if ($datosRepetidos == 1){
            $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>El usuario esta registrado
                                    <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> 
                                    </div>"; // mensaje de error
        } else {
            $registro = registro($nombre_apellido, $gmail, $password); // llamar a a función de registro

            if ($registro != null){ // validar si se inserto el registro
                $_SESSION['mensaje'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>Registro exitoso
                                        <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>"; // mensaje de éxito
            } else{
                $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Error al registrar.
                                        <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>"; // mensaje de error   
            }
        }
    } else {
        $_SESSION['mensaje'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Completa todos los campos.
                                <buton type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>"; // mensaje de error
    }
    header('Location: ../registro.php'); // redireccionar al index
?>
