<?php

include "ZooAnimal.php";

abstract class Mammal extends ZooAnimal
{

    protected function __construct(string $breed, string $name, FoodInfo $foodInfo=null, array $extraInfo=[])
    {
        parent::__construct($breed, $name, $foodInfo, $extraInfo);
    }
}
