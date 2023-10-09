<?php

namespace app\models;
/**
 * Canines are mammals that drink water, but that doesn't mean they aren't
 * mammals anymore and MammalThatDrinksWater extends Mammal
 * Therefore Canines are still a mammal(Liskov)
 */
class Canine implements MammalThatDrinksWater
{
    public function move(): string
    {
        return "Canines walk.";
    }

    public function drinkWater(): string
    {
        return "This canine drinks water";
    }
}
