<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "login";

// Habilitar reportes de errores de mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexion = new mysqli($host, $user, $password, $db);
    $conexion->set_charset("utf8");
} catch (Exception $e) {
    echo "Error en la conexión a la base de datos: " . $e->getMessage();
}
?>
