<?php

abstract class ZooAnimal
{
    protected string $breed;
    protected string $name;

    public function __construct($breed, $name)
    {
        $this->breed = $breed;
        $this->name = $name;
    }
}