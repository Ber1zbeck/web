<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <link rel="stylesheet" href="../web/scr/index.css">
</head>

<body>
    <header>
        <div class="logo"><span>SIR</span>
            <div class="logo-icon">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M4 19h16v2H4zM20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.11 0 2-.89 2-2V5c0-1.11-.89-2-2-2zm-4 10c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2V5h10v8zm4-5h-2V5h2v3z" />
                </svg>
            </div>
        </div>
        <nav>
            <a href="#">Inicio</a>
            <a href='?page=login'>Iniciar sesión</a>
            <a href='?page=registro' class="btn-nav">Empezar</a>
        </nav>
    </header>

    <section class="hero">
        <h1>SIR.<br><span>Sistema Inteligente de Reciclaje</span></h1>
        <p>Únete al programa inteligente de reciclaje SIR. Deposita tus materiales reciclables, acumula puntos y
            canjéalos por beneficios y descuentos con empresas aliadas. A través de la tecnología y la participación de
            la comunidad, transformamos los residuos en oportunidades y construimos juntos un futuro más limpio y
            sostenible.</p>
        <div class="hero-btns">
            <a href="?page=registro" class="btn btn-green">Comenzar gratis</a>
            <a href='?page=login' class="btn btn-outline">Iniciar sesión</a>
        </div>
    </section>

    <section class="how-it-works">
        <h2>SUCURSALES PARTICIPANDO</h2>
        <p class="subtitle">Tres pasos sencillos para empezar a generar un cambio positivo mientras ayudas al medio
            ambiente</p>

        <div class="grid-cards">
            <div class="card">
                <div class="card-icon">♻️</div>
                <h3>OXXO</h3>
                <p>Lleva tus materiales reciclables a nuestros puntos de recolección y gana puntos por cada depósito.
                    Cada contribución nos ayuda a construir un mundo más limpio.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎁</div>
                <h3>CAFETERIA TEC</h3>
                <p>Utiliza los puntos que ganes para obtener descuentos en productos participantes. Disfruta de los
                    beneficios mientras apoyas el reciclaje.</p>
            </div>
            <div class="card">
                <div class="card-icon">📈</div>
                <h3>FARMACIAS UNION</h3>
                <p>Visualiza tu impacto ambiental y observa cómo tus acciones de reciclaje ayudan a reducir residuos y
                    mejorar nuestra comunidad.</p>
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <h2>El cuidado de tu localidad lo fomentamos reciclando</h2>
        <p>Únete a miles de personas comprometidas con el medio ambiente que obtienen recompensas mientras ayudan a
            proteger nuestro planeta. ¡Comienza hoy!</p>
        <button class="btn btn-white">Busca tu zona</button>
    </section>

    <?php include $templates_footer; ?>


</body>

</html>