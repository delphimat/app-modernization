<?php
// Configurazione del database
$db_host = getenv('DB_HOST') ?: 'localhost'; // '34.65.60.5';
$db_name = getenv('DB_NAME') ?: 'image_catalog'; // 'image_catalog';
$db_user = getenv('DB_USER') ?: 'appmod-phpapp-user'; // 'root';
$db_pass = getenv('DB_PASS') ?: 'wrong_password'; // 'Zpd(}t:]NkOQZdHy';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
