<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";
require_once "controller/controller_usuario_reciclajes.php";

$reciclajes = ReciclajesController::verReciclajes($conn, $id_usuario);
$total_reciclajes = $reciclajes['total_reciclajes'] ?? 0;

$reciclajes_mes = ReciclajesController::verReciclajesMes($conn, $id_usuario);
$total_reciclajes_mes = $reciclajes_mes['reciclajes_mes'] ?? 0;

?>

<?php include $templates_header_usu; ?>

<body class="bg-light">

    <?php include $templates_navbar_usu; ?>

    <div class="container mt-5">

        <h2 class="mb-4">Panel de Usuario</h2>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body text-center">

                        <h5 class="card-title">Reciclajes realizados</h5>

                        <h1 class="text-primary"><?php echo $total_reciclajes; ?></h1>

                        <p class="text-muted">Depósitos registrados</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body text-center">

                        <h5 class="card-title">Reciclajes este mes</h5>

                        <h1 class="text-info"><?php echo $total_reciclajes_mes; ?></h1>

                        <p class="text-muted">Depósitos realizados en el mes actual</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

<?php include $templates_footer_usu; ?>

</html>