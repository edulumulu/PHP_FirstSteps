<?php

class Persona {
    public $nombre;
    public $edad;

    function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function mayor_de_edad(): bool{
        if($this->edad >= 18){
            return true;
        }else{ return false;}

    }

}


$per1 = new Persona("edu", 17);

if($per1->mayor_de_edad()){
    echo "Si, es mayor de edad" . PHP_EOL;
}else{
    echo " no es mayor de edad" .PHP_EOL;
}

echo "-------------------------\n";

class Coche {
    public $marca;
    public $modelo;
    public $velocidad;

    function __construct($marca, $modelo, $velocidad){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }

    function acelerar(int $velo){
        $this->velocidad += $velo;
        echo "VELOCIDAD ACTUAL --> ". $this->velocidad . PHP_EOL;
    }

    function getMarca(){
        return $this->marca;
    }

    function setMarca($marca){
        $this->marca = $marca;
    }

}

$coche1 = new Coche("ford", "escord", 100);
$coche1->acelerar(50);

echo "la marca es ". $coche1->getMarca() . PHP_EOL;
$coche1->setMarca("citroen");

echo "La nueva marca es ". $coche1->getMarca() . PHP_EOL;

