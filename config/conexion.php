<?php

$server = "localhost";
$database = "bote_reciclaje";
$user = "sa";
$password = "root";

try {

    $conn = new PDO("sqlsrv:Server=$server;Database=$database", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Error de conexión: " . $e->getMessage());

}

?>