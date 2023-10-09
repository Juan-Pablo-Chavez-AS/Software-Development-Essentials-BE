<?php

namespace app\models;

interface Mammal
{
    public function move(): string;
    public function getSpecie(): string;
}
