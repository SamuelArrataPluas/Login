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
    <nav class= "navbar navbar-expand-sm bg-dark navbar-dar">
        <div class="container-fluid">
            <a class= "navbar-brand" href="#">
                <img src="../img/user.png" alt="user" style="width: 40px;" class="rounded-pill">
            </a>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <h3>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombres']); ?>!</h3>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
