<?php

namespace App\animals;

use App\Animal;

class Whale extends Animal implements CanSwim
{
    protected function makeNoise() :string
    {
        return "splash".PHP_EOL;
    }
}