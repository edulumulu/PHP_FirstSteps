<?php

/*🧪 Ejercicios:

- Crea un array de personas con nombre, edad y ciudad, y filtra solo los mayores de edad.

- Suma todos los precios de un carrito de compras usando array_reduce.
*/

class Persona {
    public $nombre;
    public $edad;
    public $ciudad;

    function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    function mayor_de_edad(): bool{
        if($this->edad >= 18){
            return true;
        }else{ return false;}

    }
}


$pers1 = new Persona("Edu", "38", "Madrid");
$pers2 = new Persona("Paco", "45", "Barcelona");
$pers3 = new Persona("Iris", "15", "Murcia");
$personas = [$pers1, $pers2];

echo "---------- Mostrar personas --------\n";

print_r($personas) . PHP_EOL;
array_push($personas, $pers3);

echo "---------- Mostrar personas despues de añadir nueva persona --------\n";

print_r($personas) . PHP_EOL;


echo "---------- Mostrar solo mayores de edad --------\n";
foreach($personas as $p){
    if($p->mayor_de_edad()){
        print_r($p) . PHP_EOL;
    }
}



echo "---------- SEGUNDO EJERCICIO --------\n";

// Usando array normal
echo " Array normal --> \n";

$carrito = [10, 20, 30];

$total = array_reduce($carrito, function($sumador, $nuevoPrecio) {
    return $sumador + $nuevoPrecio;
}, 0);

echo "Total del carrito: $total €" . PHP_EOL;

//Usando array asociativo

echo " Array Asociativo --> \n";

$carrito = [ 
    "Producto1"=>10, 
    "Producto1"=>20, 
    "Producto1"=>30
];

$suma = array_reduce($carrito, function($acumulador, $precio){
    return $acumulador + $precio;
}, 0);

echo "Total del carrito: $total €";





