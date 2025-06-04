<?php
$notas = [7, 5, 9, 4, 6];

$suma = array_reduce($notas, function($acumulado, $valor) {
    return $acumulado + $valor;
}, 0);

$media = $suma / count($notas);
echo "La media de notas es: $media\n";
