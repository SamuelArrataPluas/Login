<?php
session_start();

if (!isset($_SESSION['nombre_apellido'])) {  // Si no existe la sesión de usuario
    header('Location: ../index.php'); // Redireccionar al index
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/Style.css?v=1.6">
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
                        <a class="nav-link" href="tienda.php">tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SobreNosotros.php">Sobre nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-gear"></i> Configuracion
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="maquinas.php">Maquinas</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li>
                                <!--Modal para salir de sesion-->
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <i class="bi bi-x-square"></i>  Salir
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- The Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="logoutModalLabel">Confirmacion</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    ¿Seguro que deseas salir de sesion?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="../php/logout.php" class="btn btn-danger">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <img src="../img/jessica-christian-e3nKKwEAS1A-un.jpg" alt="Cuidad" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/emma-renly-Zzgh5vZpSjk-unsplash.jpg" alt="Bosque" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/zach-camp-iZeI-t5NHnA-unsplash.jpg" alt="Palabras" class="d-block" style="width:100%">
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
        <h3>Bienvenid@, <?php echo htmlspecialchars($_SESSION['nombre_apellido']); ?>!</h3>
    </div>
</body>
</html>
