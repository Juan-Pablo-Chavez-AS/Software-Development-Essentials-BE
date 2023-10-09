<?php

namespace app\models;

class Canine implements Mammal
{
    public function move(): string
    {
        return "Canines walk.";
    }
}