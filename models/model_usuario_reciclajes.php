<?php

class ReciclajesModel {

    public static function obtenerReciclajes($conn, $id_usuario) {
        $sql = "SELECT COUNT(*) AS total_reciclajes
                FROM DEPOSITOS
                WHERE id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function obtenerReciclajesMes($conn, $id_usuario) {
        $sql = "SELECT COUNT(*) AS reciclajes_mes
                FROM DEPOSITOS
                WHERE id_usuario = ?
                AND MONTH(fecha_hora_fisica) = MONTH(GETDATE())
                AND YEAR(fecha_hora_fisica) = YEAR(GETDATE())";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>