<?php

namespace app\models;

class Canine implements Mammal
{
    public function move ()
    {
        return "Canines walk.";
    }
}