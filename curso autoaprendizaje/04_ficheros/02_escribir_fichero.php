<?php
// Archivo: 02_escribir_fichero.php
// Tema: 04 Ficheros

//$actividad = "- comprar manzanas" . PHP_EOL;
//file_put_contents("prueba.txt",$actividad . PHP_EOL, FILE_APPEND);

$actividades = ["Salir a comprar", "Hecharse una siesta", "aprender algo nuevo"];

foreach($actividades as $act){
    file_put_contents("prueba.txt","- ". $act . PHP_EOL, FILE_APPEND);
}

