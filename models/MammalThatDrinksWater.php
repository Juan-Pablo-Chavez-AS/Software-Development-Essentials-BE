<?php

namespace app\models;
/**
 * Since not all mammals drink water the drinkWater function was
 * segregated into a new interface
 */
interface MammalThatDrinksWater extends Mammal
{
    public function drinkWater(): string;
}
