<?php

require_once __DIR__ . "/../models/model_usuario_cupones.php";

class CuponesController {

    public static function verCupones($conn, $id_usuario) {
        return CuponesModel::obtenerCupones($conn, $id_usuario);
    }

}
?>