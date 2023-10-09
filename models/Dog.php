<?php

namespace app\models;

class Dog extends Canine
{

    private string $breed;

    public function __construct($breed)
    {
        $this->breed = $breed;
    }
}
