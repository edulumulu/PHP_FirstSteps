<?php

echo "--------- CALCULADORA ------------\n";
function calculadora (int $num1, int $num2, $operacion){
    switch($operacion){
        case "+":
            return $num1+ $num2;
            break;
        case "-":
            return $num1 - $num2;
            break;
        case "*":
            return $num1 * $num2;
            break;
        case "/";
            if($num2 == 0){
                return "No puedes dividir entre 0, lo siento";
                break;
            }

            return $num1 / $num2;
            break;

    }
}


echo calculadora(4,0,"/") . PHP_EOL;

echo "--------- LISTA TAREAS ------------\n";

$tareas = ["barrer", "comprar", "follar", "saltar"];

foreach( $tareas as $ta){
    echo $ta .PHP_EOL;
}

print_r($tareas) . PHP_EOL;

echo $tareas[2];