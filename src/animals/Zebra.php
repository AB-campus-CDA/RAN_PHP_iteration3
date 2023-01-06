<?php

namespace App\animals;

use App\Animal;

class Zebra extends Animal
{
    protected function makeNoise() :string
    {
        return "hhiiiii";
    }
}