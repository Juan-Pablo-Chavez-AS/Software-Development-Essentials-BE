<?php

namespace app\models;

class Bat implements Mammal
{
    public function move ()
    {
        return "Bats are the only mammal that flies.";
    }
}