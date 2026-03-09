<?php

require_once __DIR__ . "/../models/model_usuario_perfil.php";

class PerfilController {

    public static function verPerfil($conn, $id_usuario) {
        return PerfilModel::obtenerPerfil($conn, $id_usuario);
    }

    public static function verHistorico($conn, $id_usuario) {
        return PerfilModel::obtenerHistorico($conn, $id_usuario);
    }

}
?>