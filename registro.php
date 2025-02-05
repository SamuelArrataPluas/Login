<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/Style.css?v=1.9">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4587fd54e5.js" crossorigin="anonymous"></script>
</head>
<body>
    <br><br><br><br>
    <div class="container-fluid text-center">
        <form action="./php/validar.php" method="POST" class="Formulario" id="formulario">
        <div class="row text-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <br>
                <div class="card">
                    <div class="card-header"><h3>Registrate</h3></div>
                    <div class="card-body">
                        <?php
                            session_start();
                            if (isset($_SESSION['mensaje'])) {
                                echo $_SESSION['mensaje'];
                                unset($_SESSION['mensaje']);
                            }
                        ?>
                        <!-- grupo nombre completo -->
                        <div class="formulario__grupo input-group mb-3 input-group-sm" id="grupo_nombre_apellido">
                            <i class="input-group-text bi bi-person-plus-fill"></i>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" placeholder="Nombre y apellido" name="nombre_apellido">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Escriba su nombre y apellido completo porfavor</p>
                        </div>

                        <!-- grupo correo electronico -->
                        <div class="formulario__grupo input-group mb-3 input-group-sm" id="correo">
                            <i class="input-group-text bi bi-envelope-fill"></i>
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" placeholder="Correo electrónico" name="correo">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Correo solo puede contener letras, numeros, puntos, guiones y guion bajo</p>
                        </div>
                        <!-- grupo contraseña -->
                        <div class="formulario__grupo input-group mb-3 input-group-sm" id="password">
                            <i class="input-group-text bi bi-person-lock"></i>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" placeholder="Contraseña" name="password">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">La contraseña tiene que tener entre 4 y 12 caracteres</p>
                        </div>
                        <!-- grupo confirmar contraseña -->
                        <div class="formulario__grupo input-group mb-3 input-group-sm" id="password2">
                            <i class="input-group-text bi bi-person-lock"></i>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" placeholder="Confirmar contraseña" name="password2">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Ambas contraseñas deben ser iguales</p>
                        </div>
                        <div class="formulario_grupo formulario__grupo-btn-enviar">
                            <button type="submit" class="formulario__btn btn btn-primary btn-sm" name="registrar">Crear cuenta</button>
                        </div>
                        <br>
                        <div>
                            <p>¿Ya tienes una cuenta? <a href="index.php">Iniciar sesión</a></p>
                        </div>
                    </div>
                </div>
                <div class="formulario__grupo" id="terminos">
                    <label class="formulario__label">
                        <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                        Acepto los términos y condiciones
                    </label>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        </form>
    </div>

    <script src="./js/formulario.js"></script>
</body>
</html>