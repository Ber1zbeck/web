<?php
$base_dir = $_SERVER["DOCUMENT_ROOT"] . "/web";
# ---------------------------------------------------
# Recursos
# ---------------------------------------------------
$recursos_dir = $base_dir . "/recursos";

#Bootstrap
$recursos_bs_css  = "vendor/bootstrap/css/bootstrap.min.css";
$recursos_bs_js   = "vendor/bootstrap/js/bootstrap.min.js";
$recursos_bs_jq   = "vendor/bootstrap/js/jquery-3.2.1.slim.min.js";
$recursos_pop_js  = "vendor/bootstrap/js/popper.min.js";

# Templates
$templates_dir = $base_dir . "/views/template";

#Inicio
$templates_header = $base_dir . "/template/header.php";
$templates_navbar = $base_dir . "/template/navbar.php";
$templates_footer = $base_dir . "/template/footer.php";

#Usuario

$templates_navbar_usu = $base_dir . "/template/navbar_usuario.php";
$templates_footer_usu = $base_dir . "/template/footer_usuario.php";
$templates_header_usu = $base_dir . "/template/header_usuario.php";
