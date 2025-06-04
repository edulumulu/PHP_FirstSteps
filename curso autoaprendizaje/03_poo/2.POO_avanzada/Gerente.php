<?php
require_once 'Empleado.php';
class Gerente extends Empleado {
    private $departamento;

    public function __construct($nombre, $salario, $departamento) {
        parent::__construct($nombre, $salario);
        $this->departamento = $departamento;
    }

    public function __toString() {
        return parent::__toString() . ", Departamento: $this->departamento";
    }
}

$g = new Gerente("Laura", 3000, "Ventas");
echo $g;
