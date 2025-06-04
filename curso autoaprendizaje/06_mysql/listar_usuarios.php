<?php
require 'conexion.php';
foreach ($pdo->query("SELECT * FROM usuarios") as $fila) {
    echo $fila["nombre"] . " - " . $fila["edad"] . PHP_EOL;
}
