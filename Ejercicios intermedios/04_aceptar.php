<?php

$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Datos de registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <h1>ENHORABUENA TE HAS REGISTRADO</h1>
        <p> <strong>Nombre: </strong><?= htmlspecialchars($name) ?></p>
        <p><strong>Edad:</strong> <?= htmlspecialchars($age) ?></p>
    </body>
</html>