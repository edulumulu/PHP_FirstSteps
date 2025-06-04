<?php
class MyClass{
    public $name;
    public $age;

     function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

     function concatenar(String $msg){
        echo $msg . " para " . $this->name . " edad-> " . $this->age . "\n";
    }

    function concatenar2(String $msg){
        return $msg . " para " . $this->name . " edad-> " . $this->age . "\n";
    }
    
}



$my_class = new MyClass("Eduardo", "38");
print_r($my_class);

echo $my_class->concatenar("Hola guapeton") . "\n" ;
echo $my_class->concatenar2("Hola guapeton") ;