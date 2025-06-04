<?php

//FUNICONES


function print_number1(){
    echo "el valor es 10" . "\n";
}

function print_number2($my_number){
    echo $my_number . "\n";
}

function print_number3(int $my_number){
    
}

print_number1();

print_number2(1);
print_number2("hola");

print_number3(5);
//print_number3(8.7);
//print_number3("Adios);
