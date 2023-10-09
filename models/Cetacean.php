<?php

namespace app\models;

class Cetacean implements Mammal
{
    public function move ()
    {
        return "Cetaceans swim.";
    }
}