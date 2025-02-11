<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-U8-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Style.css?v=1.3">
    <title>login</title>
</head>
<body>
    <br><br><br><br>
    <div class="container-fluid text-center">
        <div class="row tex-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card" style="width: 400px;">
                    <div class="card-header">
                        <br>
                        <img src="./img/noFilter.png" alt="user">
                        <form action="./php/validar2.php" method="POST">
                        <?php
                        session_start();
                        if (isset($_SESSION['mensaje'])) {
                            echo $_SESSION['mensaje'];
                            unset($_SESSION['mensaje']); // Eliminar el mensaje después de mostrarlo
                        }
                        ?>
                        <div class="form-group">
                            <i class="bi bi-person-circle"></i>
                            <input type="text" placeholder="Usuario" name="nombre_apellido" id="nombre_apellido">
                        </div>
                        <div class="form-group">
                            <i class="bi bi-unlock-fill"></i>
                            <input type="password" placeholder="Contraseña" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        <div class="row link-group">
                            <div class="col">
                                <a href="recuperar.php" class="btn btn-link">Olvidaste tu contraseña?</a>
                            </div>
                            <div class="col">  
                                <a href="registro.php" class="btn btn-link">¡Regístrate!</a> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
</body>
</html>