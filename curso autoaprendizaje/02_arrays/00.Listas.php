<?php

// ARRAYS
$my_string1 = "esto es mi primera variable";
$my_bool1 = true;
$my_double1 = 8.5;
$my_int1 = 2;

$my_array  = [$my_string1, $my_int1, $my_bool1];
echo gettype($my_array) ."\n";

//Imprimir conseguir valores

echo $my_array[0] . "\n";
array_push($my_array, $my_double1);
echo "Imprimir array:\n";
print_r($my_array);
echo "valores: " . count($my_array) . "\n";
echo "valores 2: " . sizeof($my_array) . "\n";

// set mostrar los no repetidos

echo "-------------------------------" . "\n";
array_push($my_array, "Brais");
array_push($my_array, "Brais");
print_r ($my_array) . "\n";
echo "Array solo con valores no repetidos:" . "\n";
print_r(array_unique($my_array));

//DICCIONARIOS

echo "-------------------------------" . "\n";
$my_diccionario = array("string" => $my_string1, "int" => $my_int1, "bool" => $my_bool1, "ultimo" => $my_double1);
echo gettype($my_diccionario) . "\n";
print_r($my_diccionario) . "\n";
echo $my_diccionario["int"] . "\n"; 

print_r("finito");




?>