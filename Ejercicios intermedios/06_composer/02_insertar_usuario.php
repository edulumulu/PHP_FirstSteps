<?php
require "01_conexion.php";

$name = "Usuario Real";
$age = 30;

$stm = $pdo->prepare("INSERT INTO usuario (name_, age) VALUES (?, ?)");
$stm->execute([$name, $age]);

echo "Usuario insertado correctamente.";
