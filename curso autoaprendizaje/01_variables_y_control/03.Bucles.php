<?php

// FOR

for($index = 0 ;  $index <5 ; $index++){
    echo $index . "\n";
}

echo "---------------------------------" . "\n";
//FOREACH

$my_string1 = "esto es mi primera variable";
$my_bool1 = true;
$my_double1 = 8.5;
$my_int1 = 2;

$my_array  = [$my_string1, $my_int1, $my_bool1];



foreach($my_array as $item){
    echo $item . "\n";
}
echo "---------------------------------" . "\n";


//WHILE  /   IF    &  Y    ||  OR

$a = 0;

while($a < sizeof($my_array) +10){
    
    if($a <8){
        echo $a . "\n";
    }
    elseif($a >= 8 & $a <= 10){
        echo "el valor es " . $a . "\n";
    }else{
        echo "fin ". $a . "\n";
    }
    $a++;
    
}
