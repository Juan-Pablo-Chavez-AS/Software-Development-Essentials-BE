<?php

namespace app\models;

class Cephalopod implements Mammal
{
    public function move ()
    {
        return "Cephalopods swim.";
    }
}