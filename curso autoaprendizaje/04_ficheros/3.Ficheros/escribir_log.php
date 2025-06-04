<?php
$log = "Acceso en: " . date("Y-m-d H:i:s") . PHP_EOL;
file_put_contents("log.txt", $log, FILE_APPEND);
