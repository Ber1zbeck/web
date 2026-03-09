<?php include $templates_header; ?>


<body>
    
<?php include $templates_navbar; ?>


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
        <button class="btn btn-white" a href='?page=busca_tu_zona'>Busca tu zona</button>
    </section>

    <?php include $templates_footer; ?>


</body>

</html>