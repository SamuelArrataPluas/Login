<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-U8-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Style.css?v=1.1">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <img src="./img/noFilter.png" alt="user">
            <hr>
            <form action="./php/validar2.php" method="post">
                <?php
                    session_start();
                    if (isset($_SESSION['mensaje'])) {
                        echo $_SESSION['mensaje'];
                        unset($_SESSION['mensaje']);
                    }
                ?>
                    <i class="bi bi-person-circle"></i>
                    <input type="text" placeholder="Usuario" name="usuario" id="usuario">
                    <i class="bi bi-unlock-fill"></i>
                    <input type="password" placeholder="Contraseña" name="password" id="password">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <a href="registro.php" class="btn btn-link">¡Regístrate!</a>
            </form>
        </div>
    </div>
</body>
</html>