<?php
// Archivo: 05_objetos_array.php
// Tema: 03 Poo

require_once "04_interface.php";
require_once "01_clase_coche.php";
require_once "03_herencia.php";

$che1 = new furgoneta("opel", "Combo", 120, "1500 kg");
$che2 = new Coche("Fiat", "Astra", 180);
$che3 = new Coche("Renault", "Clio", 130);

$coches = [$che1, $che2, $che3];

foreach($coches as $co){
    echo $co . PHP_EOL;
    if($co->getVelocidad() > 120){
        echo "-------> Vehículo veloz \n";
    }
}

