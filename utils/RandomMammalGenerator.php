<?php

namespace app\utils;

use app\models\Chiropteran;
use app\models\Canine;
use app\models\Mammal;
use app\models\Cetacean;
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
                $mammal = new Canine("Siberian Husky", "");
                break;
            case 1:
                $mammal = new Cetacean();
                break;
            case 2:
                $mammal = new Chiropteran();
                break;
            default:
                throw new Exception("Rand() failed");
        }
        return $mammal;
    }
}
