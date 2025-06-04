<?php

//Booleano

echo "---------- BOLLEANOS --------------" . "\n";
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

echo "------------------------" . "\n";
$bo = (bool) "1";
print_r($bo) . "\n";
echo $bo ."\n";

echo "---------- ENTEROS --------------" . "\n";

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)

$my_int = 7;
echo $my_int . "\n";
$my_int = $my_int + 2;

echo $my_int . "\n";

echo "---------- DECIMALES --------------" . "\n";

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; // a partir de PHP 7.4.0

echo $a . "\n" . $b . "\n" . $c . "\n" . $d. "\n";

//Comparar dos numeros decimales obtenidos de diferentes maneras

$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y); // is not true

//PHP thinks that 1.6 (coming from a difference) is not equal to 1.6. To make it work, use round()

var_dump(round($x, 2) == round($y, 2)); // this is true

//This happens probably because $x is not really 1.6, but 1.599999.. and var_dump shows it to you as being 1.6.


echo "---------- Strings --------------" . "\n";

// salto de linea PHP_EOL o \n

echo 'esto es un string simple', PHP_EOL;

echo 'También puede tener nuevas líneas integradas en
los strings de esta manera, porque es admisible hacerlo.', PHP_EOL;



$juice = "manzana";
echo "Ha bebido un poco de $juice jugo." . PHP_EOL;



echo "hello \n";


$my_string = "esto es mi primera variable";
echo $my_string . "\n";
echo gettype($my_string) . "\n"; 


$my_string =  6;
echo $my_string . "\n";
$my_string = "esto es mi primera variable";
$my_int = 7;
$my_int = $my_int + 2;


$my_double = 7.8;
//echo $my_string + $my_double . "\n";


$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";

echo "el valor de mi decimal es $my_double y el de mi boleano --> $my_bool . \n";


//CONSTANTES

const MY_CONSTANT = "Valor de la constante";

echo MY_CONSTANT . "\n";


?>