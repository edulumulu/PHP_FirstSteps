<?php
$tareas = file("tareas.txt", FILE_IGNORE_NEW_LINES);
foreach ($tareas as $tarea) {
    echo "- $tarea" . PHP_EOL;
}
