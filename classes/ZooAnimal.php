<?php

abstract class ZooAnimal
{
    protected string $breed;
    protected string $name;
    protected FoodInfo $foodInfo;

    abstract function move(): string;
    abstract function getSpecie(): string;

    public function __construct(string $breed, string $name, FoodInfo $foodInfo=null)
    {
        $this->breed = $breed;
        $this->name = $name;
        $this->foodInfo = $foodInfo;
    }

    public function getFoodInfo(): FoodInfo
    {
        return $this->foodInfo;
    }

    public function getAllInfo(): string
    {
        $foodInfo = $this->foodInfo->getFoodInfo();
        return "Name: $this->name.\nBreed: $this->breed\nFood: $foodInfo";
    }
}
