<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create();
for ($i = 0; $i < 10; $i++) {
    echo $faker->name . " - " . $faker->email . PHP_EOL;
}
