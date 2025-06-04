<?php
require 'conexion.php';
$nombre = "Ana";
$edad = 25;
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, edad) VALUES (?, ?)");
$stmt->execute([$nombre, $edad]);
