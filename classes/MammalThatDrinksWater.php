<?php

/**
 * Since not all mammals drink water the drinkWater function was
 * segregated into a new interface
 */
abstract class MammalThatDrinksWater extends Mammal
{
    abstract function drinkWater(): string;

    protected function __construct($breed, $name)
    {
        parent::__construct($breed, $name);
    }

}
