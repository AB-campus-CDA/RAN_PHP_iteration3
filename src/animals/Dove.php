<?php

namespace App\animals;

use App\Animal;

class Dove extends Animal implements CanFly, CanWalk
{
    protected function makeNoise() :string
    {
        return "rou rouuu".PHP_EOL;
    }
}