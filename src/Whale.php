<?php

namespace App;

class Whale extends Animal
{
    protected function makeNoise() :string
    {
        return "splash";
    }
}