<?php
$alumnos = [
    ["nombre" => "Ana", "nota" => 8],
    ["nombre" => "Luis", "nota" => 4],
    ["nombre" => "Carlos", "nota" => 6],
    ["nombre" => "Laura", "nota" => 3],
];

$aprobados = array_filter($alumnos, function($alumno) {
    return $alumno["nota"] >= 5;
});

echo "Alumnos aprobados:\n";
foreach ($aprobados as $a) {
    echo $a["nombre"] . " con nota " . $a["nota"] . "\n";
}
