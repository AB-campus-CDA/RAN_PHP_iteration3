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
    Fish::class => 5,
    BubbleFish::class => 3,
    CatFish::class => 2,
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

        if (class_exists($animal,true)) {
            $newAnimal = new $animal($name);
        } else {
            $class = 'App\\'.$animal;
            $newAnimal = new $class($name);
        }

        array_push($zoo, $newAnimal);
    }
}

var_dump($zoo);