<?php

include "Mammal.php";

class Cetacean extends Mammal
{

    public function __construct(string $breed, string $name, FoodInfo $foodInfo=null)
    {
        parent::__construct($breed, $name, $foodInfo);
    }

    public function move (): string
    {
        return "Cetaceans swim.";
    }

    public function getSpecie(): string
    {
        return "Cetacean";
    }
}
