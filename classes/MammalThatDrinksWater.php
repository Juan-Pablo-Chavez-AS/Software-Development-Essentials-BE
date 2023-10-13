<?php

include "Mammal.php";

/**
 * Since not all mammals drink water the drinkWater function was
 * segregated into a new interface
 */
abstract class MammalThatDrinksWater extends Mammal
{
    abstract function drinkWater(): string;

    public function __construct(string $breed, string $name, FoodInfo $foodInfo=null)
    {
        parent::__construct($breed, $name, $foodInfo);
    }

}
