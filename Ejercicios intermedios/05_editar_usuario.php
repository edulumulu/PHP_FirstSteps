<?php
// Archivo: 04_editar_usuario.php
// Tema: 06 Mysql

require "05_conexion.php";
require "05_listar_usuarios.php";

$name = "edu";
$age = 26;

$stm = $pdo->prepare("UPDATE usuario SET age = ? WHERE name_ = ?");
$stm->execute([$age, $name]);

//No recomendado usar query, mejor prepare
//$resultado = $pdo->query("UPDATE usuario SET age = $age WHERE name_ = '$name'");


if ($stm->rowCount() > 0) {
    echo "Usuario modificado correctamente.";
    findAll();
} else {
    echo "No se modificó ningún usuario. ¿El nombre existe?";
}