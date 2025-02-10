<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/Style.css?v=1.1">

</head>
<body>
    <br><br><br><br><br><br>
    <div class="container-fluid text-center">
        <Form action="#" method="POST">
            <div class="row text-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card" style="width:600px">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col"><h4 style="text-align: left;">Restablecer contraseña</h4></div>
                                    <div class="col"><a href="index.php" class="btn btn-link">
                                        <h6 style="position:absolute">Ir al login</h6></a></div>
                                </div>
                                <hr>
                            <div class="card-body">
                                <div class="input-group">
                                    <i class="input-group-text bi bi-envelope-fill"></i>
                                    <input type="text" class="form-control" placeholder="Correo electronico" name=correo>
                                </div>
                                <br>
                                <div class="btn-group">
                                        <button type="submit" class="btn btn-success" style="right: 225px;">Enviar</button>
                                </div>
                            </div>
                            <div class="card-footer">
                                <br>
                                <div>
                                    <p>¿No tienes una cuenta? <a href="registro.php"> Registrate!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </Form>
    </div>
</body>
</html>