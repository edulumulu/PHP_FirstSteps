<?php

function es_primo(int $num): string{
    for($i = 2 ; $num > $i; $i++){
        if($num % $i == 0){
            return "no es primo";
        }else{
            return "es primo";
        }
    }
    
}

$nume = 47;
echo "El numero $nume ". es_primo(47) . PHP_EOL;


function factorial(int $num){
    $total = $num;
    for($i = $num ; $i >1 ; $i--){
        echo $total . " x ". ($i - 1) . " = ";
        $total *= ($i - 1);
        echo $total . PHP_EOL;
    }
}

echo "------------------------\n";
echo factorial(5);

echo "------------------------\n";

function contar_vocales(string $texto): int{
    $vocales = ['a', 'e', 'i', 'o','u'];
    $contador = 0;
    //lo hago minusculas
    $texto = strtolower($texto);

    $letras_cadena = str_split($texto);

    foreach($letras_cadena as $letra){
        if(in_array($letra, $vocales)){
            $contador++;
        }
    }
    return $contador;
}

echo contar_vocales("Me huele el serete") . PHP_EOL;


$array = ["hola", "adios"];
$palabra = "hola"
;if(in_array($palabra, $array)){
    echo "EXISTE $palabra EN EL ARRAY";
}else{
    echo "No existe $palabra en el array";
}