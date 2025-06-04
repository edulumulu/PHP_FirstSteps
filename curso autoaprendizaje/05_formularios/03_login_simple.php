<?php
// Archivo: 03_login_simple.php
// Tema: 05 Formularios

$user= $_POST['user'] ?? 'Invitado';
$pass = $_POST['pass'] ?? 'no';
$nombre= $_POST['nombre'] ?? $user;
$age = $_POST['age'] ?? '0';

echo "User: ". $user . ", Password: ". $pass . ", Nombre: ". $nombre . ", Edad: ".$age;
