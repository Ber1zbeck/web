<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ?page=login");
    exit();
}

require_once "config/conexion.php";

?>

<?php include $templates_header_admin; ?>


<body class="bg-light">

    <?php include $templates_navbar_admin; ?>

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

            <!-- TARJETA RECICLAJES -->

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body text-center">

                        <h5 class="card-title">Reciclajes</h5>

                        <h1 class="text-primary">0</h1>

                        <p class="text-muted">Depósitos realizados</p>

                    </div>

                </div>

            </div>

            <!-- TARJETA CANJES -->

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body text-center">

                        <h5 class="card-title">Canjes</h5>

                        <h1 class="text-warning">0</h1>

                        <p class="text-muted">Recompensas obtenidas</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include $templates_footer_admin; ?>

</body>

</html>