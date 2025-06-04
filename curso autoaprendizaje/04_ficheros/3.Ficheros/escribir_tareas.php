<?php
$tarea = "Comprar leche";
file_put_contents("tareas.txt", $tarea . PHP_EOL, FILE_APPEND);
