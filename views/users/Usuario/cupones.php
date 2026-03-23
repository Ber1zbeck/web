<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";
require_once "controller/controller_usuario_cupones.php";
require_once "controller/controller-empresas-cupones.php";

$id_usuario = $_SESSION['id_usuario'];

$cupones = CuponesController::verCupones($conn, $id_usuario);
$total_cupones = $cupones['total_cupones'] ?? 0;

// Obtener empresas desde controller + model
$empresas = EmpresasCuponesController::obtenerEmpresas($empresas_cupones);
?>

<?php include $templates_header_usu; ?>

<body class="bg-light">

    <?php include $templates_navbar_usu; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Panel de Usuario</h2>

        <div class="row g-4">

            <!-- Card de cupones -->
            <div class="col-md-4">
                <div class="card h-100 bg-white text-dark border-0 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tus cupones</h5>
                        <h1 class="text-warning"><?php echo $total_cupones; ?></h1>
                        <p class="text-muted">Cupones obtenidos</p>
                    </div>
                </div>
            </div>

            <!-- Cards de empresas aliadas -->
            <?php if (!empty($empresas)): ?>
                <?php foreach ($empresas as $empresa): ?>
                    <div class="col-md-4">
                        <div class="card h-100 bg-white text-dark border-0 shadow-sm">
                            <div class="card-body text-center d-flex flex-column">

                                <?php if (!empty($empresa['logo_url'])): ?>
                                    <img
                                        src="<?php echo htmlspecialchars($empresa['logo_url']); ?>"
                                        class="img-fluid mb-3"
                                        style="max-height: 100px; object-fit: contain;">
                                <?php endif; ?>

                                <h5 class="card-title">
                                    <?php echo htmlspecialchars($empresa['nombre_comercial']); ?>
                                </h5>

                                <a href="?page=cupones-empresa&id=<?php echo $empresa['id_empresa']; ?>" class="btn btn-success">
                                    Ver cupones
                                </a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-8">
                    <div class="alert alert-info mb-0">
                        No hay empresas aliadas registradas por el momento.
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <?php include $templates_footer_usu; ?>

</body>

</html>