<?php
// Archivo: 01_leer_fichero.php
// Tema: 04 Ficheros

$textoLeido = file("prueba.txt", FILE_IGNORE_NEW_LINES);

foreach ($textoLeido as $linea) {
    echo $linea . PHP_EOL;
}