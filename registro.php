<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/Style.css?v=1.5">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <br><br><br><br>
    <div class="container-fluid text-center">
        <!--form action="" method="post">
            <div class="row text-center">
                <div class="col-sm-3">a</div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header"><h3>Registrate</h3></div>
                        <div class="card-body">
                            <div class="input-group mb3 input-group-sm">
                                <i class="input-group-text bi bi-person-plus-fill"></i>
                                <input type="text" class="form-control" placeholder="Nombre completo" name="nombres">
                                <input type="text" class="form-control" placeholder="Apellido Completo" name="apellidos">
                            </div><br>
                            <div class="input-group mb3 input-group-sm">
                                <i class="input-group-text bi bi-envelope-fill"></i>
                                <input type="text" class="form-control" placeholder="Correo electronico" name="gmail">
                            </div><br>
                            <div class="input-group mb3 input-group-sm">
                                <i class="input-group-text bi bi-person-circle"></i>
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                            </div><br>
                            <div class="input-group mb3 input-group-sm">
                                <i class="input-group-text bi bi-person-lock"></i>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                            </div><br>
                            <input type="button" class="btn btn-success btn-sm" value="Crear cuenta" name="registrar">
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">c</div>
            </div>
        </form-->
        <form action="" method="post">
        <div class="row text-center">
            <div class="col-sm-3">a</div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header"><h3>Regístrate</h3></div>
                    <div class="card-body">
                        <?php
                        include("./php/conexion.php");
                        include("./controlador/registrar_usuario.php");
                        ?>
                        <div class="input-group mb-3 input-group-sm">
                            <i class="input-group-text bi bi-person-plus-fill"></i>
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombres">
                        </div>
                        <div class="input-group mb-3 input-group-sm">
                            <i class="input-group-text bi bi-person-plus-fill"></i>
                            <input type="text" class="form-control" placeholder="Apellido completo" name="apellidos">
                        </div>
                        <div class="input-group mb-3 input-group-sm">
                            <i class="input-group-text bi bi-envelope-fill"></i>
                            <input type="email" class="form-control" placeholder="Correo electrónico" name="gmail">
                        </div>
                        <div class="input-group mb-3 input-group-sm">
                            <i class="input-group-text bi bi-person-circle"></i>
                            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                        </div>
                        <div class="input-group mb-3 input-group-sm">
                            <i class="input-group-text bi bi-person-lock"></i>
                            <input type="password" class="form-control" placeholder="Contraseña" name="password">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm" name="registrar">Crear cuenta</button>
                        <a href="index.html">Regresar :v</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">c</div>
        </div>
        </form>
    </div> 
</body>
</html>