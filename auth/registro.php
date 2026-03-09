<?php

require_once "../config/conexion.php";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO USUARIOS(nombre_completo,correo_electronico,password_hash)
VALUES(?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->execute([$nombre,$correo,$password]);

header("Location: ../?page=login");

?>