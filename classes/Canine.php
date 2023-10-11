<?php

/**
 * Canines are mammals that drink water, but that doesn't mean they aren't
 * mammals anymore and MammalThatDrinksWater extends Mammal
 * Therefore Canines are still a mammal(Liskov)
 */
class Canine extends MammalThatDrinksWater
{

    public function __construct($breed, $name)
    {
        parent::__construct($breed, $name);
    }

    public function move(): string
    {
        return "Canines walk.";
    }

    public function drinkWater(): string
    {
        return "This canine drinks water";
    }

    public function getSpecie(): string
    {
        return "Canine";
    }
}
