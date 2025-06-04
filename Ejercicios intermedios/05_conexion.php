<?php
// Archivo: 01_conexion_pdo.php
// Tema: 06 Mysql

try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3308;dbname=usuarios", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR DE CONEXIÓN: " . $e->getMessage());
}
