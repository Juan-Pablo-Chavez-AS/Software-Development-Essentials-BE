<?php

class Cetacean extends Mammal
{

    public function __construct($breed, $name)
    {
        parent::__construct($breed, $name);
    }

    public function move (): string
    {
        return "Cetaceans swim.";
    }

    public function getSpecie(): string
    {
        return "Cetacean";
    }
}