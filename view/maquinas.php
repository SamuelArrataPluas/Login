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
    <title>Máquinas Expendedoras - Nombre de la Empresa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Máquinas Expendedoras</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="maquinas_expendedoras.php">Máquinas Expendedoras</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Sección de Introducción -->
        <section>
            <h2>Soluciones en Máquinas Expendedoras</h2>
            <p>En <strong>Nombre de la Empresa</strong>, nos especializamos en ofrecer máquinas expendedoras de alta calidad para todo tipo de negocios. Ya sea para oficinas, escuelas, gimnasios o espacios públicos, tenemos la solución perfecta para ti.</p>
        </section>

        <!-- Sección de Productos -->
        <section>
            <h2>Nuestras Máquinas</h2>
            <div class="productos">
                <div class="producto">
                    <h3>Máquinas de Snacks</h3>
                    <img src="snacks.jpg" alt="Máquina de Snacks">
                    <p>Ofrecemos una variedad de máquinas expendedoras de snacks, ideales para satisfacer antojos en cualquier momento.</p>
                </div>
                <div class="producto">
                    <h3>Máquinas de Bebidas</h3>
                    <img src="bebidas.jpg" alt="Máquina de Bebidas">
                    <p>Máquinas modernas y eficientes para la venta de bebidas frías y calientes, como café, refrescos y agua.</p>
                </div>
                <div class="producto">
                    <h3>Máquinas de Productos Variados</h3>
                    <img src="variados.jpg" alt="Máquina de Productos Variados">
                    <p>Desde productos de higiene personal hasta artículos de emergencia, nuestras máquinas son versátiles y confiables.</p>
                </div>
            </div>
        </section>

        <!-- Sección de Servicios -->
        <section>
            <h2>Nuestros Servicios</h2>
            <ul>
                <li><strong>Venta de Máquinas:</strong> Ofrecemos máquinas nuevas y reacondicionadas para adaptarnos a tu presupuesto.</li>
                <li><strong>Instalación:</strong> Nos encargamos de la instalación y puesta en marcha de las máquinas en tu ubicación.</li>
                <li><strong>Mantenimiento:</strong> Servicio de mantenimiento preventivo y correctivo para garantizar el funcionamiento óptimo.</li>
                <li><strong>Abastecimiento:</strong> Te ayudamos a seleccionar los productos ideales para tu máquina y nos encargamos del reabastecimiento.</li>
            </ul>
        </section>

        <!-- Sección de Ventajas -->
        <section>
            <h2>¿Por Qué Elegirnos?</h2>
            <ul>
                <li>Máquinas de última generación con tecnología avanzada.</li>
                <li>Atención personalizada y servicio al cliente 24/7.</li>
                <li>Precios competitivos y planes de financiamiento.</li>
                <li>Amplia experiencia en el sector.</li>
            </ul>
        </section>

        <!-- Llamado a la Acción -->
        <section>
            <h2>Contáctanos</h2>
            <p>¿Interesado en nuestras máquinas expendedoras? ¡No dudes en contactarnos! Estamos aquí para ayudarte a encontrar la mejor solución para tu negocio.</p>
            <a href="contacto.php" class="cta-button">Contáctanos</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Nombre de la Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>