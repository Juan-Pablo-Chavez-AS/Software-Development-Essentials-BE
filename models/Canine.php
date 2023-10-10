<?php

namespace app\models;
/**
 * Canines are mammals that drink water, but that doesn't mean they aren't
 * mammals anymore and MammalThatDrinksWater extends Mammal
 * Therefore Canines are still a mammal(Liskov)
 */
class Canine implements MammalThatDrinksWater
{
    private string $breed;
    private string $name;

    public function __construct($breed, $name)
    {
        $this->breed = $breed;
        $this->name = $name;
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
