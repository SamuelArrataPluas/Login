<?php
session_start();

if (!isset($_SESSION['nombre_apellido'])) {  // Si no existe la sesión de usuario
    header('Location: ../index.php'); // Redireccionar al index
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Nombre de la Empresa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sobre Nosotros</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="SobreNosotros.php">Sobre Nosotros</a></li>
                <li><a href="AcercaDe.php">Acerca De</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Nuestra Historia</h2>
            <p>Somos una empresa con más de 10 años de experiencia en el mercado, dedicada a ofrecer soluciones innovadoras para nuestros clientes. Nuestra misión es mejorar la calidad de vida a través de productos y servicios de alta calidad.</p>
        </section>

        <section>
            <h2>Nuestro Equipo</h2>
            <p>Contamos con un equipo de profesionales altamente capacitados y comprometidos con la excelencia. Cada miembro de nuestro equipo aporta su experiencia y pasión para lograr los mejores resultados.</p>
        </section>

        <section>
            <h2>Nuestra Misión</h2>
            <p>Proporcionar soluciones innovadoras y de calidad que satisfagan las necesidades de nuestros clientes, contribuyendo al desarrollo sostenible y al bienestar de la sociedad.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Nombre de la Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>