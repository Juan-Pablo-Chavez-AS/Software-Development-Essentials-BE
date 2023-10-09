<?php

namespace app\models;

abstract class Cetacean implements Mammal
{
    public function move (): string
    {
        return "Cetaceans swim.";
    }

    public function getSpecie(): string
    {
        return "Cetacean";
    }
}