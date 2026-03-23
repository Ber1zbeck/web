<?php
$correo = trim($_POST['correo']);
$password = trim($_POST['password']);

include '../config/conexion.php';
include '../models/model.usuario.php';

try {
    session_start();
    $db->debug();

    // Buscar usuario por correo en la tabla USUARIOS
    $sql = "SELECT * FROM USUARIOS WHERE correo_electronico = ?";

    $usuario->get($sql, array($correo));

    if ($usuario->data && password_verify($password, $usuario->data->password_hash)) {

        $_SESSION['usuario'] = $usuario->data;
        $_SESSION['id_usuario'] = $usuario->data->id_usuario;
        $_SESSION['nombre'] = $usuario->data->nombre_completo;
        $_SESSION['tipo'] = $usuario->data->tipo_usuario;

        switch ($usuario->data->tipo_usuario) {
            case 'Usuario':
                header("location:../?page=usu-inicio");
                exit();

            case 'Administrador':
                header("location:../?page=adm-inicio");
                exit();

            case 'Moderador':
                header("location:../?page=mod-inicio");
                exit();

            default:
                $_SESSION['error'] = "Rol de usuario no válido";
                header("location:../?page=login");
                exit();
        }

    } else {
        $_SESSION['error'] = "Usuario o contraseña incorrecta";
        header("location:../?page=login");
        exit();
    }

} catch (Exception $e) {
    $_SESSION['error'] = "Ocurrió un error al iniciar sesión";
    header("location:../?page=login");
    exit();
}