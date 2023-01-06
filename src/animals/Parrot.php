<?php

namespace App\animals;

use App\Animal;

class Parrot extends Animal
{
    protected function makeNoise() :string
    {
        return "coco";
    }
}