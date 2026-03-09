<?php

class UsuarioModel {

    public static function obtenerPuntos($conn, $id_usuario) {
        $sql = "SELECT saldo_puntos FROM USUARIOS WHERE id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function obtenerPuntosMes($conn, $id_usuario) {
        $sql = "SELECT SUM(puntos) AS puntos_mes
                FROM HISTORIAL_PUNTOS
                WHERE id_usuario = ?
                AND tipo_movimiento = 'Deposito'
                AND MONTH(fecha) = MONTH(GETDATE())
                AND YEAR(fecha) = YEAR(GETDATE())";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>