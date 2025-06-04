<?php
// Archivo: 02_insertar_usuario.php
// Tema: 06 Mysql

function nuevoUser(){
    require "05_conexion.php"; 

    $name = "Edu";
    $age = 38;

    $stm = $pdo->prepare("INSERT INTO usuario (name_, age) VALUES (?, ?)");
    $stm->execute([$name, $age]);

    echo "Usuario insertado correctamente.";
}

nuevoUser();