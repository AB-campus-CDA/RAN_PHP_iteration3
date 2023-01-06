<?php
namespace App;
require 'vendor/autoload.php';
/*
use App\{
    Animal,
    Fish,
    BubbleFish,
    CatFish,
    ClownFish,
    Elephant,
    Zebra,
    Parrot,
    Dove
};*/


$animalsQuantity = [
    'Fish' => 5,
    'BubbleFish' => 3,
    'CatFish' => 2,
    'ClownFish' => 1,
    'Elephant' => 2,
    'Zebra' => 1,
    'Parrot' => 10,
    'Dove' => 2
];

$zoo = [];


// fill the zoo with animals
foreach ($animalsQuantity as $animal => $quantity) {
    for ($i=1; $i<= $quantity; $i++) {
        $name = $animal.$i;
        $class = 'App\\'.$animal;
        if (class_exists($class,true)) {
            $newAnimal = new $class($name);
            array_push($zoo, $newAnimal);
        } else {
            echo "La classe $animal n'existe pas".PHP_EOL;
        }
    }
}

var_dump($zoo);