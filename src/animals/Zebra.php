<?php

namespace App\animals;

use App\Animal;

class Zebra extends Animal implements CanSwim, CanWalk
{
    protected function makeNoise() :string
    {
        return "hhiiiii".PHP_EOL;
    }
}