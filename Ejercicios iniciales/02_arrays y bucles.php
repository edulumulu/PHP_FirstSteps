<?php
$nom1 = "Paco";
$nom2 = "Antonio";
$nom3 = "Eduardo";
$nom4 = "Sandra";
$nombres = [$nom1, $nom2,$nom3,$nom4 ];
$cont = 0;
//$nombres =["Paco", "Antonio",  "Eduardo", "Sandra"];
ECHO "LISTA DE NOMBRES \n";
foreach($nombres as $nom){
    $cont++;
    echo $cont . " --> ", $nom . PHP_EOL;
    
}

print_r($nombres);

print_r($nombres[1]) .PHP_EOL;

echo "\n---------------------------------------\n";


function tabla_multiplicar (int $nume){
    echo "--------\n";
    echo "Tabla del " . $nume . PHP_EOL;


    for($i = 1; $i<11 ; $i++){
        $multi = $i * $nume;
        echo $nume . " x ". $i . " = " . $multi .PHP_EOL;
    }
    
}

for($i = 1; $i<6 ; $i++){
    tabla_multiplicar($i);
}

echo "\n----------------- Bucle while ------------------\n";
$n = 10;
while($n >= 0){
    echo $n . PHP_EOL;
    $n--;
}