<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";
require_once "controller/controller_usuario_perfil.php";

$perfil = PerfilController::verPerfil($conn, $_SESSION['id_usuario']);
$historico = PerfilController::verHistorico($conn, $_SESSION['id_usuario']);

$nombre = $perfil['nombre_completo'] ?? '';
$correo = $perfil['correo_electronico'] ?? '';
$fecha_registro = $perfil['fecha_creacion'] ?? '';

$puntos = $historico['puntos'] ?? 0;
$reciclajes_totales = $historico['reciclajes_totales'] ?? 0;
$cupones_canjeados = $historico['cupones_canjeados'] ?? 0;
?>

<?php include $templates_header_usu; ?>

<body class="bg-light">

    <?php include $templates_navbar_usu; ?>

    <div class="container mt-5 mb-5">

        <h2 class="mb-4">Mi Perfil</h2>

        <div class="card shadow border-0 rounded-4 mb-4">
            <div class="card-body p-4">

                <h4 class="mb-4">Información personal</h4>

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="border rounded-3 p-3 bg-white h-100">
                            <h6 class="text-muted">Nombre</h6>
                            <p class="mb-0 fw-semibold"><?php echo $nombre; ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="border rounded-3 p-3 bg-white h-100">
                            <h6 class="text-muted">Correo electrónico</h6>
                            <p class="mb-0 fw-semibold"><?php echo $correo; ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="border rounded-3 p-3 bg-white h-100">
                            <h6 class="text-muted">Fecha de registro</h6>
                            <p class="mb-0 fw-semibold">
                                <?php echo date("d/m/Y", strtotime($fecha_registro)); ?>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="card shadow border-0 rounded-4">
            <div class="card-body p-4">

                <h4 class="mb-4">Histórico</h4>

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">Cupones canjeados</h5>
                                <h1 class="text-warning"><?php echo $cupones_canjeados; ?></h1>
                                <p class="text-muted mb-0">Total de recompensas obtenidas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">Reciclajes totales</h5>
                                <h1 class="text-primary"><?php echo $reciclajes_totales; ?></h1>
                                <p class="text-muted mb-0">Depósitos realizados</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">Puntos acumulados</h5>
                                <h1 class="text-success"><?php echo $puntos; ?></h1>
                                <p class="text-muted mb-0">Saldo actual del usuario</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <?php include $templates_footer_usu; ?>

</body>

</html>