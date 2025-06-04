<?php
$nombre = $_POST['nombre'] ?? 'Invitado';
$edad = $_POST['edad'] ?? 0;
echo "Bienvenido $nombre, tienes $edad años.";
