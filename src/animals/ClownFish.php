<?php

namespace App\animals;

use App\Animal;

class ClownFish extends Animal implements CanSwim
{
    use MakeBloublou;
}