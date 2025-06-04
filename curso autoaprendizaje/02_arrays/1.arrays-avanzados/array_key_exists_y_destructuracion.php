<?php
$persona = ["nombre" => "Eduardo", "edad" => 30];

if (array_key_exists("edad", $persona)) {
    echo "Edad: " . $persona["edad"] . "\n";
}

// Desestructuración
$datos = ["Pepe", 45];
[$nombre, $edad] = $datos;
echo "Nombre: $nombre, Edad: $edad\n";
