<?php

require_once "models/model_usuario_puntos.php";

class UsuarioController {

    public static function verPuntos($conn, $id_usuario) {
        return UsuarioModel::obtenerPuntos($conn, $id_usuario);
    }

    public static function verPuntosMes($conn, $id_usuario) {
        return UsuarioModel::obtenerPuntosMes($conn, $id_usuario);
    }

}
?>