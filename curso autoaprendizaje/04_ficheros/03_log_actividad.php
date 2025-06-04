<?php
// Archivo: 03_log_actividad.php
// Tema: 04 Ficheros
$texto = "Fichero creado el dia ". date("Y-m-d H:i:s") . PHP_EOL;
file_put_contents("prueba.txt",$texto, FILE_APPEND);