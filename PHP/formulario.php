<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>

    <button type="button" class="btn btn-primary text-dark fw-bold mx-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Login
    </button>

    <!--Formulario -->
    <div class="container my-5">
        <div class="bg-white p-5 rounded-3 shadow-lg">
            <h2 class="text-center text-success fw-bold mb-4">Formulario de Registro</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="NOMBRES" class="form-label">Nombres</label>
                    <input type="text" class="form-control"  id="NOMBRES" name="NOMBRES" required>
                </div>

                <div class="mb-3">
                    <label for="APELLIDOS" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="APELLIDOS" name="APELLIDOS" required>
                </div>

                <div class="mb-3">
                    <label for="EMAIL" class="form-label">Email</label>
                    <input type="email" class="form-control" id="EMAIL" name="EMAIL" required>
                </div>

                <div class="mb-3">
                    <label for="CONTRASENA" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="CONTRASENA" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="SEXO" id="sexo-hombre" value="Hombre" required>
                        <label class="form-check-label" for="sexo-hombre">Hombre</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="SEXO" id="sexo-mujer" value="Mujer">
                        <label class="form-check-label" for="sexo-mujer">Mujer</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="SEXO" id="sexo-otro" value="Otro">
                        <label class="form-check-label" for="sexo-otro">Otro</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo de Usuario</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="TIPO_USUARIO" id="ALUMNO" value="Alumno" required>
                        <label class="form-check-label" for="ALUMNO">Alumno</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="TIPO_USUARIO" id="DOCENTE" value="DOCENTE">
                        <label class="form-check-label" for="DOCENTE">Docente</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100">Registrar</button>
            </form>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container my-5">
                        <div class="bg-white p-5 rounded-3 shadow-lg">
                            <h2 class="text-center text-success fw-bold mb-4">Iniciar Sesión</h2>
                            <form action="login.php" method="POST">
                                <div class="mb-3">
                                    <label for="EMAIL" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="EMAIL" name="EMAIL" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="CONTRASENA" name="CONTRASENA" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Iniciar Sesión</button>
                            </form>
                            <?php if (isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger">
                                    <?php 
                                    echo htmlspecialchars($_SESSION['error']); 
                                    unset($_SESSION['error']); 
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="cambiar_contrasena.php" class="btn btn-primary">Cambiar Contraseña</a>
                    <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</a>
                    <a href="formulario.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>