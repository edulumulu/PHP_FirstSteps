<?php
// Archivo: 03_listar_usuarios.php
// Tema: 06 Mysql



function findAll(){
    require "05_conexion.php"; 

    $lista = $pdo->query("SELECT * FROM usuario");
    if($lista->rowCount()> 0){
        echo "Lista de usuarios: \n";
        $contador = 1;
        foreach($lista as $fila){
            echo $contador . " - nombre: " . $fila["name_"]. " - Edad: ". $fila["age"] . PHP_EOL;
            $contador++;
        }
    }else{
        echo "No hay ningun usuario registrado";
    }

}

findAll();


