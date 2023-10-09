<?php

namespace app\models;

class Chiropteran implements Mammal
{
    public function move ()
    {
        return "Bats are the only mammal that flies.";
    }
}