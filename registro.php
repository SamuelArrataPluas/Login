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
        <form action="./php/validar.php" method="POST">
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
                        <br>
                        <a href="index.php">Regresar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        </form>
    </div> 
</body>
</html>