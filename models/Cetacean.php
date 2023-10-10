<?php

namespace app\models;

class Cetacean implements Mammal
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