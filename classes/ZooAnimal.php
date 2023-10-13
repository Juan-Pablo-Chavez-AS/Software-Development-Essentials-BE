<?php

abstract class ZooAnimal
{
    protected string $breed;
    protected string $name;
    protected FoodInfo $foodInfo;
    protected array $extraInfo;

    public function __construct(string $breed, string $name, FoodInfo $foodInfo=null, array $extraInfo=[])
    {
        $this->breed = $breed;
        $this->name = $name;
        $this->foodInfo = $foodInfo;
        $this->extraInfo = $extraInfo;
    }

    public function getFoodInfo(): FoodInfo
    {
        return $this->foodInfo;
    }

    public function getExtraInfo()
    {
        $keys = array_keys($this->extraInfo);
        return array_reduce($keys, function ($carry, $key){
            $item = $this->extraInfo[$key];
            return "$carry$key: $item<br>";
        }, "");
    }

    public function getAllInfo(): string
    {
        $foodInfo = $this->foodInfo->getFoodInfo();
        return "Name: $this->name.<br>Breed: $this->breed<br>Food: $foodInfo<br>" . $this->getExtraInfo();
    }

    abstract function move(): string;
    abstract function getSpecie(): string;
}
