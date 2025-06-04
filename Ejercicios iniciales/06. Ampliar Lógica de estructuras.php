<?php

//Crea un array de personas con nombre, edad y ciudad, y filtra solo los mayores de edad.

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
print_r($personas) . PHP_EOL;
array_push($personas, $pers3);
print_r($personas) . PHP_EOL;


echo "---------- Mayores de edad --------\n";
foreach($personas as $p){
    if($p->mayor_de_edad()){
        print_r($p) . PHP_EOL;
    }
}

