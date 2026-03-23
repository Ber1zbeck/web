<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Login - Sistema de Reciclaje</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <div class="login-card">

        <div class="logo">
            🌱
        </div>

        <h4 class="title">SIR</h4>

        <?php if (isset($_GET['error'])): ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                <?php
                switch ($_GET['error']) {
                    case 'clave':
                        echo "Contraseña incorrecta";
                        break;
                    case 'usuario':
                        echo "Usuario no encontrado";
                        break;
                    case 'campos':
                        echo "Completa todos los campos";
                        break;
                }
                ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

            </div>

        <?php endif; ?>

        <form action="auth/login.php" method="POST">

            <div class="mb-3">
                <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="d-grid gap-2">

                <button type="submit" class="btn btn-green w-100">
                    Iniciar sesión
                </button>

                <a href='?page=registro' class="btn btn-danger w-100">
                    Crear cuenta
                </a>

            </div>

        </form>

    </div>

</body>

</html>