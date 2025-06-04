<?php
// Archivo: 03_herencia.php
// Tema: 03 Poo

require_once "01_clase_coche.php";

class furgoneta extends Coche{
    public $tonelaje;

    public function __construct($marca, $modelo, $velocidad, $tonelaje){
        parent::__construct($marca, $modelo, $velocidad);
        $this->tonelaje = $tonelaje;
    }

    public function getTonelaje(){ return $this->tonelaje;}
    public function setTonelaje($tonelaje){ $this->tonelaje = $tonelaje;}

    function acelerar(int $cantidad){
        $this->velocidad += $cantidad;
        echo "🚐 Acelerando furgoneta a {$this->velocidad} km/h\n";
    }

    function frenar(int $cantidad){
        $this->velocidad -= $cantidad;
        if ($this->velocidad < 0) $this->velocidad = 0;
        echo "🛑 Frenando furgoneta a {$this->velocidad} km/h\n";
    }

    public function toString(){
        return parent::__toString() . ", Tonelaje: ". $this->tonelaje .PHP_EOL;
    }

}
/*
$combo = new furgoneta("opel", "Combo", 120, "1500 kg");
echo $combo . PHP_EOL;

echo $combo->getMarca() .PHP_EOL;
echo $combo->getTonelaje().PHP_EOL;*/

