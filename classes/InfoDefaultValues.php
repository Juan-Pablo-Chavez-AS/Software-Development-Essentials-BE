<?php

class InfoDefaultValues
{
    private const DEFAULT_FOOD_INFO_VALUE = "No food information available";

    public static function getDefaultFoodInfo(): FoodInfo
    {
        $defaultFoodInfo = new FoodInfo(self::DEFAULT_FOOD_INFO_VALUE);
        return $defaultFoodInfo;
    }
}