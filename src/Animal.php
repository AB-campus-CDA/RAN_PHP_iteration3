<?php

namespace App;

abstract class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    protected function makeNoise() :string
    {
        return "";
    }

    public function noise() :string
    {
        return $this->makeNoise();
    }

}