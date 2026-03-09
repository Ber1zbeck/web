<?php

class PerfilModel {

    public static function obtenerPerfil($conn, $id_usuario) {
        $sql = "SELECT nombre_completo, correo_electronico, fecha_creacion
                FROM USUARIOS
                WHERE id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function obtenerHistorico($conn, $id_usuario) {
        $sql = "SELECT 
                    (SELECT saldo_puntos 
                     FROM USUARIOS 
                     WHERE id_usuario = ?) AS puntos,

                    (SELECT COUNT(*) 
                     FROM DEPOSITOS 
                     WHERE id_usuario = ?) AS reciclajes_totales,

                    (SELECT COUNT(*) 
                     FROM CANJES 
                     WHERE id_usuario = ?) AS cupones_canjeados";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_usuario, $id_usuario, $id_usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>