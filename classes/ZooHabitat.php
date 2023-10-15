<?php

class ZooHabitat
{
    protected array $animals;
    protected string $name;
    protected string $animalClassification;

    /**
     * @param string $classification Should be the value of ```::class``` from a concrete class that implements ```ZooAnimal```
     */
    public function __construct(string $classification, $name)
    {
        $this->animals = array();
        $this->animalClassification = $classification;
        $this->name = $name;
    }

    public function addAnimal(ZooAnimal $animal): void
    {
        $animalClass = get_class($animal);
        if($this->animalClassification !== $animalClass) {
            throw new InvalidArgumentException("This habitat only accepts $this->animalClassification, tried to add an $animalClass");
        }
        $animal[] = $animal;
    }

    /**
     * @param array $animals Zoo Animals that don't correspond to this habitat are filtered before
     * trying to add them to the habitat
     */
    public function addAnimals(array $animals): void
    {
        $filteredAnimals = array_filter($animals, function($animal) {
            $animalClass = get_class($animal);
            return $this->animalClassification === $animalClass;
        });
        array_push($this->animals, ...$filteredAnimals);
    }

    public function habitatInfo(): string
    {
        $habitatInfo = "<h4>$this->name</h4><h3>$this->animalClassification" . "s</h3>";
        array_walk_recursive($this->animals, function ($animal) use (&$habitatInfo) {
            $habitatInfo .= "<hr/>{$animal->getAllInfo()}";
        });
        return $habitatInfo;
    }
}
