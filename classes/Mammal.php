<?php

abstract class Mammal extends ZooAnimal
{

    abstract function move(): string;
    abstract function getSpecie(): string;

    protected function __construct($breed, $name)
    {
        parent::__construct($breed, $name);
    }

}
