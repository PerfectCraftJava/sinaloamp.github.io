<?php
$host = '191.101.251.35';
$dbname = 's41_SinaloaMP';
$username = 'u41_EOvOYxFczB';
$password = '!Eszb=0zRAW3E8mAck6XNc6h';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
