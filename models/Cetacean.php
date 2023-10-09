<?php

namespace app\models;

abstract class Cetacean implements Mammal
{
    public function move (): string
    {
        return "Cetaceans swim.";
    }
}