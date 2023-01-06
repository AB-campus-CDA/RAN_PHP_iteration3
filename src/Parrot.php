<?php

namespace App;

class Parrot extends Animal
{
    protected function makeNoise() :string
    {
        return "coco";
    }
}