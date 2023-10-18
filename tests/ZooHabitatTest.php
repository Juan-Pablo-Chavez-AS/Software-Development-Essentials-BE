<?php

    use PHPUnit\Framework\TestCase;

    class ZooHabitatTest extends TestCase
    {

        private ZooHabitat $zooHabitat;

        public function setUp(): void
        {
            $this->zooHabitat = new ZooHabitat(Canine::class, "Canines's pit");
        }

        public function atestAddAnimal()
        {
            $canine = $this->getMockBuilder(Canine::class)
                ->getMock();
            // $this->zooHabitat->addAnimal($canine);// WIP: Create ZooHabitats for each specification of ZooAnimal
        }
    }
?>
