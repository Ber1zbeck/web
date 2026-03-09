<?php

require_once "models/model_usuario_reciclajes.php";

class ReciclajesController {

    public static function verReciclajes($conn, $id_usuario) {
        return ReciclajesModel::obtenerReciclajes($conn, $id_usuario);
    }

    public static function verReciclajesMes($conn, $id_usuario) {
        return ReciclajesModel::obtenerReciclajesMes($conn, $id_usuario);
    }

}
?>