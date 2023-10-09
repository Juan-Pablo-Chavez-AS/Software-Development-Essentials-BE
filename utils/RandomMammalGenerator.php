<?php

namespace app\utils;

use app\models\Bat;
use app\models\Dog;
use app\models\Mammal;
use app\models\Whale;
use Exception;
/**
 * Single responsability class
 */
class RandomMammalGenerator
{
    /**
     * Breaks Open-Closed
     */
    public static function generate(): Mammal
    {
        $mammal = null;
        $mammalType = rand(0, 2);
        switch ($mammalType) {
            case 0:
                $mammal = new Dog("Siberian Husky");
                break;
            case 1:
                $mammal = new Whale();
                break;
            case 2:
                $mammal = new Bat();
                break;
            default:
                throw new Exception("Rand() failed");
        }
        return $mammal;
    }
}
