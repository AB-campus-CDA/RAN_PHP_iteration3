<?php

namespace App;

abstract class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __tostring()
    {
        return $this->makeNoise();
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