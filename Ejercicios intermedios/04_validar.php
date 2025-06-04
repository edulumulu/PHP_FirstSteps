<?php

$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
$texto ;


if((strcasecmp($user, "edu") == 0) && strcmp($pass, "edu") == 0){
    $texto = "Usuario validadado";
}else{
    $texto = "Datos incorrectos";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmación de autentificación</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <h1>RESULTADO DE TU INTENTO DE LOGING</h1>
        <p> <strong><?= htmlspecialchars($texto) ?></strong></p>
        
    </body>
</html>