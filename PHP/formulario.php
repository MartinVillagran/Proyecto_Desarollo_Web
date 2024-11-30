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

</body>
</html>