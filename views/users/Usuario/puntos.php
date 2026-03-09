<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";
require_once "controller/controller_usuario_puntos.php";

$id_usuario = $_SESSION['id_usuario'];

$usuario = UsuarioController::verPuntos($conn, $id_usuario);
$puntos = $usuario['saldo_puntos'] ?? 0;

$mes = UsuarioController::verPuntosMes($conn, $id_usuario);
$puntos_mes = $mes['puntos_mes'] ?? 0;

?>

<!DOCTYPE html>
<html lang="es">

<?php include $templates_header_usu; ?>

<body class="bg-light">

    <?php include $templates_navbar_usu; ?>

    <div class="container mt-5">

        <h2 class="mb-4">Panel de Usuario</h2>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body text-center">

                        <h5 class="card-title">Mis Puntos</h5>

                        <h1 class="text-success"><?php echo $puntos; ?></h1>

                        <p class="text-muted">Puntos acumulados</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body text-center">

                        <h5 class="card-title">Puntos este mes</h5>

                        <h1 class="text-success"><?php echo $puntos_mes; ?></h1>

                        <p class="text-muted">Puntos obtenidos en el mes actual</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include $templates_footer_usu; ?>

</body>

</html>