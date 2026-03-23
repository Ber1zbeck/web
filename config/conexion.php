<?php

$server = "sirema-server.database.windows.net";
$database = "sirema-server1";
$user = "admin_sirema";
$password = "Suesa.x1t";

try {

    $conn = new PDO("sqlsrv:Server=$server;Database=$database", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Error de conexión: " . $e->getMessage());

}

?>