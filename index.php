<?php
include "directorios.php";
include 'config/conexion.php';

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR);

if (isset($_GET["page"])) {
    switch ($_GET['page']) {
        # pagina principal
        case 'registro':
            include 'views/home/registro.php';
            break;
        case 'inicio':
            include 'views/home/inicio.php';
            break;
        case 'contacto':
            include 'views/home/contacto.php';
            break;
        case 'login':
            include 'views/home/login.php';
            break;
        case 'busca-tu-zona':
            include 'views/home/busca_tu_zona.php';
            break;

        #Usuario
        case 'inicio-usuario':
            include 'views/users/Usuario/inicio.php';
            break;

        case 'puntos-usuario':
            include 'views/users/Usuario/puntos.php';
            break;

        case 'reciclajes-usuario':
            include 'views/users/Usuario/reciclajes.php';
            break;

        case 'cupones-usuario':
            include 'views/users/Usuario/cupones.php';
            break;

        case 'perfil-usuario':
            include 'views/users/Usuario/perfil.php';
            break;
    }
} else {
    include 'views/home/inicio.php';
}
