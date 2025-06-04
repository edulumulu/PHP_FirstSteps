<?php
$nombres = ["Ana", "Luis", "Carlos", "Laura"];
$buscar = "Carlos";

if (in_array($buscar, $nombres)) {
    echo "$buscar está en la lista.\n";
} else {
    echo "$buscar NO está en la lista.\n";
}

echo "------------------------\n";

$array = ["hola", "adios"];
$palabra = "hola"
;if(in_array($palabra, $array)){
    echo "EXISTE $palabra EN EL ARRAY";
}else{
    echo "No existe $palabra en el array";
}

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

