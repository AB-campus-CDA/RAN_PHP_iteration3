<?php

namespace App\animals;

use App\Animal;

class CatFish extends Animal implements CanSwim
{
    use MakeBloublou;
}