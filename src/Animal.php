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
        return self::class;
    }

    public static function getShortName() :string
    {
        $path = explode('\\', static::class);
        return array_pop($path);
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