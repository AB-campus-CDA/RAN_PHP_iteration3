<?php

namespace App\animals;

use App\Animal;

class Fish extends Animal implements CanSwim
{
    use MakeBloublou;
}