<?php

namespace App\animals;

use App\Animal;

class Dove extends Animal
{
    protected function makeNoise() :string
    {
        return "rou rouuu";
    }
}