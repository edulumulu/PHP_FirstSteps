<?php
// Archivo: 03_switch.php
// Tema: 01 Variables Y Control

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