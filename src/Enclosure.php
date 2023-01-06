<?php

namespace App;

class Enclosure
{
    private $animals = [];

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal): void
    {
        array_push($this->animals, $animal);
    }

    public function toString()
    {
        echo "du bruit";
    }
}