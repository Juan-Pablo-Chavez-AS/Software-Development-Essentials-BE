<?php

namespace app\models;

class Chiropteran implements Mammal
{
    public function move (): string
    {
        return "Bats are the only mammal that flies.";
    }
}