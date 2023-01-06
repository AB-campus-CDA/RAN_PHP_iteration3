<?php

namespace App\animals;

use App\Animal;

class Elephant extends Animal
{
    protected function makeNoise() :string
    {
        return "toooooooouuut";
    }
}