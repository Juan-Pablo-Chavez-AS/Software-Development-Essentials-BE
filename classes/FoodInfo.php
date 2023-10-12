<?php

class FoodInfo
{

    private string $foodInfo;

    public function __construct(string $foodInfo)
    {
        $this->foodInfo = $foodInfo;
    }

    public function getFoodInfo(): string
    {
        return $this->foodInfo;
    }

    public function setFoodInfo(string $foodInfo)
    {
        $this->foodInfo = $foodInfo;
    }

}
