<?php

include_once "Mammal.php";

/**
 * Since not all mammals drink water the drinkWater function was
 * segregated into a new interface
 */
abstract class MammalThatDrinksWater extends Mammal
{

    public function __construct(string $breed, string $name, FoodInfo $foodInfo=null, array $extraInfo=[])
    {
        parent::__construct($breed, $name, $foodInfo, $extraInfo);
    }

    abstract function drinkWater(): string;
}
