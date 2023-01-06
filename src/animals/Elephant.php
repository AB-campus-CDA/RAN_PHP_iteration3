<?php

namespace App\animals;

use App\Animal;

class Elephant extends Animal implements CanWalk
{
    protected function makeNoise() :string
    {
        return "toooooooouuut".PHP_EOL;
    }
}