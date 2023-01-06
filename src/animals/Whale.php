<?php

namespace App\animals;

use App\Animal;

class Whale extends Animal
{
    protected function makeNoise() :string
    {
        return "splash";
    }
}