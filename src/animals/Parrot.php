<?php

namespace App\animals;

use App\Animal;

class Parrot extends Animal implements CanFly, CanWalk
{
    protected function makeNoise() :string
    {
        return "coco".PHP_EOL;
    }
}