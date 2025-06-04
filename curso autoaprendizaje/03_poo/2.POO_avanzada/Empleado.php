<?php
class Empleado {
    private $nombre;
    private $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }

    public function getSalario() { return $this->salario; }
    public function setSalario($salario) { $this->salario = $salario; }

    public function __toString() {
        return "Empleado: $this->nombre, Salario: $this->salario";
    }
}
