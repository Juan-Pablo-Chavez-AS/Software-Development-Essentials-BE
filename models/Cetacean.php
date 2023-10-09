<?php

namespace app\models;

class Cetacean implements Mammal
{
    public function move (): string
    {
        return "Cetaceans swim.";
    }
}