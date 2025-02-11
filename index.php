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
    <br><br><br><br><br>
    <div class="container-fluid text-center">
        <div class="row tex-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card" style="width: 400px;">
                    <div class="card-header">
                        <br>
                        <img src="./img/logoinapps.png" alt="logoimg" class="rounded-circle">
                        <form action="./interfaces/inicioUsuarioInterface.php" method="POST" class="needs-validation" novalidate>
                        <?php
                        session_start();
                        if (isset($_SESSION['mensaje'])) {
                            echo $_SESSION['mensaje'];
                            unset($_SESSION['mensaje']); // Eliminar el mensaje después de mostrarlo
                        }
                        ?>
                        <div class="mb-3 formulario_login">
                            <i class="bi bi-person-circle"></i>
                            <input type="text" placeholder="Usuario" name="nombre_apellido" autofocus required>
                            <div class="invalid-feedback">
                                Rellene el campo
                            </div>
                        </div>
                        <div class="mb-3 formulario_login">
                            <i class="bi bi-unlock-fill"></i>
                            <input type="password" placeholder="Contraseña" name="password" autofocus required>
                            <div class="invalid-feedback">
                                La contraseña es obligatoria
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        <div class="row link-group">
                            <div class="col">
                                <a href="./view/recuperar.php" class="btn btn-link">Olvidaste tu contraseña?</a>
                            </div>
                            <div class="col">  
                                <a href="./view/registro.php" class="btn btn-link">¡Regístrate!</a> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
    <!-- BOOTSTRAP 5 SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })();
    </script>
</body>
</html>