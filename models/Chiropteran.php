<?php

namespace app\models;
/**
 * Quiropterans are mammals that drink water, but that doesn't mean they aren't
 * mammals anymore and MammalThatDrinksWater extends Mammal
 * Therefore Quiropterans are still a mammal(Liskov)
 */
class Chiropteran implements MammalThatDrinksWater
{
    public function move(): string
    {
        return "Bats are the only mammal that flies.";
    }

    public function drinkWater(): string
    {
        return "This Chiropteran drinks water";
    }

    public function getSpecie(): string
    {
        return "Chiropteran";
    }
}
