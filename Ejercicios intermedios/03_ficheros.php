<?php

//🧪 Ejercicio:

//Guarda los resultados de operaciones matemáticas en un fichero resultados.txt.

//Escribir fichero
$operaciones = [];

$num1 = 4;
$num2 = 2;

$operaciones[0] = "Summa de $num1 + $num2 = ". ($num1 + $num2);
$operaciones[1] = "Resta de $num1 - $num2 = ". ($num1 - $num2);
$operaciones[2] = "Producto de $num1 * $num2 = ". ($num1 * $num2);
$operaciones[3] = "Division de $num1 + $num2 = ". ($num2 != 0 ? $num1 / $num2 : "No se puede dividir por 0");

$fecha = date("Y-m-d H:i:s");
$texto = "Resultados ($fecha)\n". implode("\n", $operaciones). "\n\n" ;

$archivo = "resultados.txt";
file_put_contents($archivo, $texto, FILE_APPEND);

//leer fichero

echo "--------------- LECTURA --------------\n";
$textoFichero = file($archivo, FILE_IGNORE_NEW_LINES);

foreach($textoFichero as $line){
    echo $line . PHP_EOL;
}

echo "--------------- LECTURA 2  --------------\n";

echo implode("\n", $textoFichero);