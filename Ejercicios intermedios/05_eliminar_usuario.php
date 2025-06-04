<?php
// Archivo: 05_eliminar_usuario.php
// Tema: 06 Mysql

require "05_conexion.php";
require "05_listar_usuarios.php";

$name = "edu";

$stm = $pdo->prepare("DELETE FROM usuario WHERE name_ = ?");
$stm->execute([$name]);

if ($stm->rowCount() > 0) {
    echo "Usuario modificado correctamente.";
    findAll();
} else {
    echo "No se modificó ningún usuario. ¿El nombre existe?";
}