<?php

namespace App\animals;

use App\Animal;

class BubbleFish extends Animal implements CanSwim
{
    use MakeBloublou;
}