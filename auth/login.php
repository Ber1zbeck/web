<?php

session_start();
require_once "../config/conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../login.html");
    exit();
}

if (!isset($_POST['correo']) || !isset($_POST['password'])) {
    header("Location: ../login.html?error=campos");
    exit();
}

$correo = trim($_POST['correo']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM USUARIOS WHERE correo_electronico = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error en la consulta SQL");
}

$stmt->execute([$correo]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario) {

    if (password_verify($password, $usuario['password_hash'])) {

        session_regenerate_id(true);

        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre_completo'];
        $_SESSION['tipo'] = $usuario['tipo_usuario'];

        switch ($usuario['tipo_usuario']) {
            case 'Administrador':
                header("Location: ../?page=adm-inicio");
                exit();

            case 'Moderador':
                header("Location: ../?page=mod-inicio");
                exit();

            case 'Usuario':
            default:
                header("Location: ../?page=inicio-usuario");
                exit();
        }

    } else {
        header("Location: ../?page=login&error=clave");
        exit();
    }

} else {
    header("Location: ../?page=login&error=usuario");
    exit();
}

$stmt = null;
$conn = null;

?>      