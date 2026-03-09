<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";
require_once "controller/controller_usuario_cupones.php";

$id_usuario = $_SESSION['id_usuario'];

$cupones = CuponesController::verCupones($conn, $_SESSION['id_usuario']);
$total_cupones = $cupones['total_cupones'] ?? 0;

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

                        <h5 class="card-title">Tus cupones</h5>

                        <h1 class="text-warning"><?php echo $total_cupones; ?></h1>

                        <p class="text-muted">Cupones obtenidos</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include $templates_footer_usu; ?>

</body>

</html>