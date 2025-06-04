<?php
// Archivo: 01_clase_coche.php
// Tema: 03 Poo

require_once "04_interface.php";
class Coche implements Vehiculo{
    public $marca;
    public $modelo;
    public $velocidad;

    function __construct($marca, $modelo, $velocidad){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }

    function getMarca(){ return $this->marca; }
    function setMarca($marca){ $this->marca = $marca;}

    function getVelocidad(){ return $this->velocidad; }
    function setVelocidad($velocidad){ $this->velocidad = $velocidad;}

    function getModelo(){ return $this->modelo; }
    function setModelo($modelo){ $this->modelo = $modelo;}

    function acelerar(int $cantidad){
        $this->velocidad += $cantidad;
        echo "🚗 Acelerando a {$this->velocidad} km/h\n";
    }

    function frenar(int $cantidad){
        $this->velocidad -= $cantidad;
        if ($this->velocidad < 0) $this->velocidad = 0;
        echo "🛑 Frenando a {$this->velocidad} km/h\n";
    }

    function __toString(){
        return "Marca: ". $this->marca . ", Modelo: " . $this->modelo . ", velocidad: ". $this->velocidad;
    }

}