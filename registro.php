<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/Style.css?v=1.7">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <br><br><br><br>
    <div class="container-fluid text-center">
        <form action="./php/validar.php" method="POST" class="Formulario" id="formulario">
        <div class="row text-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
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
                        <div class="input-group mb-3 input-group-sm" id="nombres">
                            <i class="input-group-text bi bi-person-plus-fill"></i>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" placeholder="Nombre completo" name="nombres">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Escriba su nombre completo porfavor</p>
                        </div>

                        <!-- grupo apellidos -->
                        <div class="input-group mb-3 input-group-sm" id="apellidos">
                            <i class="input-group-text bi bi-person-plus-fill"></i>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" placeholder="Apellido completo" name="apellidos">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Escriba su apellido completo completo porfavor</p>
                        </div>
                        <!-- grupo correo electronico -->
                        <div class="input-group mb-3 input-group-sm" id="gmail">
                            <i class="input-group-text bi bi-envelope-fill"></i>
                            <div class="formulario__grupo-input">
                                <input type="email" class="form-control" placeholder="Correo electrónico" name="gmail">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                        </div>
                        <!-- grupo usuario -->
                        <div class="input-group mb-3 input-group-sm" id="usuario">
                            <i class="input-group-text bi bi-person-circle"></i>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">El usuario puede tener entre 4 a 16 digitos, puede contener numeros, letras y guion bajo.</p>
                        </div>
                        <!-- grupo contraseña -->
                        <div class="input-group mb-3 input-group-sm" id="password">
                            <i class="input-group-text bi bi-person-lock"></i>
                            <div class="formulario__grupo-input">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">La contraseña tiene que tener entre 4 y 12 caracteres</p>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm" name="registrar">Crear cuenta</button>
                        <br>
                        <a href="index.php">Regresar</a>
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
    
    <script src="./js/validar.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>