<?php

class CuponesModel {

    public static function obtenerCupones($conn, $id_usuario) {
        $sql = "SELECT COUNT(*) AS total_cupones
                FROM CANJES
                WHERE id_usuario = ?
                AND estado_vale = 'Activo'";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>