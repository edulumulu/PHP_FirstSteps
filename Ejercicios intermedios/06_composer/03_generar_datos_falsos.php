<?php
require "01_conexion.php";

$faker = Faker\Factory::create();

for ($i = 0; $i < 10; $i++) {
    $name = $faker->name();
    $age = rand(18, 60);
    $stm = $pdo->prepare("INSERT INTO usuario (name_, age) VALUES (?, ?)");
    $stm->execute([$name, $age]);
    echo "Insertado: $name, $age\n";
}
