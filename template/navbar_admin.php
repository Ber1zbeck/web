<nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="?page=inicio-usuario">SIR</a>

        <!-- Botón responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSIR" aria-controls="navbarSIR"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSIR">

            <!-- Menú -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="?page=inicio-usuario">Inicio</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="?page=puntos-usuario">Puntos</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="?page=reciclajes-usuario">Reciclajes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=cupones-usuario">Cupones</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=perfil-usuario">Mi Perfil</a>
                </li>

            </ul>

            <!-- Usuario logueado -->
            <span class="navbar-text text-white me-3">
                👤 <?php echo $_SESSION['nombre']; ?>
            </span>

            <!-- Logout -->
            <a href="auth/logout.php" class="btn btn-light btn-sm">
                Cerrar sesión
            </a>

        </div>

    </div>

</nav>