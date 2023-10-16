<?php

abstract class ZooAnimal
{
    protected string $breed;
    protected string $name;
    protected ?FoodInfo $foodInfo;
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getBreed(): string
    {
        return $this->breed;
    }

    public function setBreed($breed): void
    {
        $this->breed = $breed;
    }

    /**
     * @return string returns each element in ```$this->extrainfo``` as string separated by a ```<br>``` tag
     */
    public function getExtraInfo(): string
    {
        $keys = array_keys($this->extraInfo);
        return array_reduce($keys, function ($carry, $key){
            $item = $this->extraInfo[$key];
            return "$carry$key: $item<br>";
        }, "");
    }

    /**
     * @return array returns ```$this->extrainfo``` as an associative array
     */
    public function getExtraInfoAsArray(): array
    {
        return $this->extraInfo;
    }

    public function getAllInfo(): string
    {
        if ($this->foodInfo) {
            $foodInfo = $this->foodInfo->getFoodInfo();
        } else {
            $foodInfo = "Unkown";
        }
        return "Name: $this->name.<br>Breed: $this->breed<br>Food: $foodInfo<br>" . $this->getExtraInfo();
    }

    abstract function move(): string;
    abstract function getSpecie(): string;
}
