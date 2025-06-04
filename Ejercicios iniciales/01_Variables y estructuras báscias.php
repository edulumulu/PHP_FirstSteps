<?php

function suma (int $num1, int $num2): int{
    return $num1 + $num2;
}

function par_o_impar($num): string{
    if($num % 2 == 0){
        return "Es par";
    }else{
        return "es impar";
    }
}

function dia_de_la_semana(int $num): string{
    switch($num){
        case 1:
            return "Es lunes\n";
            break;
        case 2:
            return "Es martes\n";
            break;
        case 3:
            return "Es miercoles\n";
            break;
        case 4:
            return "Es jueves\n";
            break;    
        case 5:
            return "Es viernes\n";
             break;
        case 6:
            return "Es sabado\n";
            break;
        case 7:
            return "Es domingo\n";
            break;
    }
}



ECHO "TOTAL SUMA -> ";
echo suma(1, 2), PHP_EOL;

ECHO "---------------------------". PHP_EOL ;

echo "NUM PAR O IMPAR" . PHP_EOL;
ECHO par_o_impar(5) . PHP_EOL;

//echo "Introduce un número: ";
//$numero = trim(fgets(STDIN));
//echo "\n Has elegido el numero $numero" . PHP_EOL;
//echo par_o_impar((int) $numero);


ECHO "---------------------------". PHP_EOL ;

echo dia_de_la_semana(2) ;
echo dia_de_la_semana(4) ;
echo dia_de_la_semana(6);

