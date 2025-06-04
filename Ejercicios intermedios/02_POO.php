<?php

/*
🧪 Ejercicios:

Crea una clase Animal y una clase Perro que hereda de ella.

Usa __toString() para mostrar información del objeto como string.

Crea una interfaz Transportable que requiera un método transportar().
*/

interface Transportable {
   public function transportar();
}

class animal {
    public $peso;
    public $tipo;

    function __construct($peso, $tipo){
        $this->peso = $peso;
        $this->tipo = $tipo;
    }

    public function getPeso(){ return $this->peso;    }
    public function setPeso(){ $this->peso = $peso;    }
    public function getTipo(){ return $this->tipo;    }
    public function setTipo(){ $this->tipo = $tipo;    }

    public function toString(){
        return "Peso --> ". $this->peso. "- Tipo -->". $this->tipo;
    }

}

class perro extends animal implements Transportable{
    public $raza;

    function __construct($peso, $tipo, $raza){
        parent::__construct($peso, $tipo);
        $this->raza = $raza;
    }

    public function getRaza(){ return $this->raza;    }
    public function setRaza(){ $this->raza = $raza;    }

    public function transportar(){
        if($this->peso <20){
            return true;
        }else{return false;}
    }
    public function toString(){
        return parent::toString(). "- Raza -->" . $this->raza;
    }

}

$animal1 = new animal(17, "ballena");
$animal2 = new animal(25, "pato");
$animal3 = new perro(12,"perro", "caniche");
$animal4 = new perro(50,"perro", "GALGO");

$animales = [$animal1, $animal2, $animal3];

foreach($animales as $ani){
    print_r($ani);
}

array_push($animales, $animal4);

foreach($animales as $anim){
    if ($anim instanceof perro) {
        if ($anim->transportar()) {
            echo $anim->toString() . PHP_EOL . " ---> se puede transportar\n";
        } else {
            echo $anim->toString() . PHP_EOL . " ---> NOOOOO se puede transportar\n";
        }
    }
}