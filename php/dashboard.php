<?php
session_start();

// Verificar si el usuario inició sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: validar.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/Style.css?v=1.4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class= "navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a class= "navbar-brand" href="#">
                <img src="../img/user.png" alt="user" style="width: 40px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" ref="#">Enlace 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ref="#">Enlace 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ref="#"><i class="bi bi-gear"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/de3436b5-20ab-4172-a937-7f61a558.png" alt="Roblox" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/1d4f7cef-118a-406a-9737-491b5b77.jpg" alt="Club" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/d326e86c-3765-4289-9de1-33f60e2e.jpg" alt="Chica anime" class="d-block" style="width:100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <div class="container-fluid mt-3">
        <h3>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombres']); ?>!</h3>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
