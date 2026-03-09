<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Registro - Sistema de Reciclaje</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <div class="login-card">

        <div class="logo">
            🌱
        </div>

        <h4 class="title">SIR</h4>

        <form action="auth/registro.php" method="POST">

            <div class="mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
            </div>

            <div class="mb-3">
                <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="d-grid gap-2">

                <button type="submit" class="btn btn-warning w-100">
                    Crear cuenta
                </button>

                <a href='?page=login' class="btn btn-primary w-100">
                    ¿Ya tienes una cuenta?
                </a>

            </div>

        </form>

    </div>

</body>

</html>