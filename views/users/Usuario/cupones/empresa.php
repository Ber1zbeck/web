<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";
require_once "controller/controller-empresas-cupones.php";

$id_empresa = $_GET['id'] ?? null;

if (!$id_empresa || !is_numeric($id_empresa)) {
    echo "Empresa no válida";
    exit();
}

$empresa = $empresas_cupones->getOne($id_empresa);

if (!$empresa) {
    echo "Empresa no encontrada";
    exit();
}
?>

<?php include $templates_header_usu; ?>

<body class="bg-light">

    <?php include $templates_navbar_usu; ?>

    <div class="container mt-5">
        <h2 class="mb-4">
            Cupones de <?php echo htmlspecialchars($empresa['nombre_comercial']); ?>
        </h2>

        <div class="card shadow-sm border-0">
            <div class="card-body text-center">

                <?php if (!empty($empresa['logo_url'])): ?>
                    <img
                        src="<?php echo htmlspecialchars($empresa['logo_url']); ?>"
                        class="img-fluid mb-3"
                        style="max-height: 120px; object-fit: contain;">
                <?php endif; ?>

                <h4><?php echo htmlspecialchars($empresa['nombre_comercial']); ?></h4>
                <p class="text-muted">
                    Contacto: <?php echo htmlspecialchars($empresa['contacto_enlace'] ?? 'Sin información'); ?>
                </p>

                <hr>

                <p>Aquí puedes mostrar los cupones relacionados con esta empresa.</p>
                <p><strong>ID empresa:</strong> <?php echo $empresa['id_empresa']; ?></p>

            </div>
        </div>
    </div>

    <?php include $templates_footer_usu; ?>
</body>

</html>