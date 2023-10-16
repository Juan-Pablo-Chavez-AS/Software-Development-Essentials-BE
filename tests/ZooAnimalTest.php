<?php

    include_once "../classes/FoodInfo.php";

    use PHPUnit\Framework\TestCase;

    class ZooAnimalTest extends TestCase
    {

        private ZooAnimal $mock;// WIP: is this name correct?

        public function setUp(): void
        {
            $foodIndo = new FoodInfo("Carnivore");
            $extraInfo = [];
            $this->mock = new class("abstract", "missingNo", $foodIndo, $extraInfo) extends ZooAnimal{

                public function move(): string
                {
                    return "No testing required";
                }

                public function getSpecie(): string
                {
                    return "No testing required";
                }
            };
        }

        public function testMockAbstract() // WIP: Is it correct to keep this test?
        {
            $this->assertNotNull($this->mock);
            $this->assertEquals("abstract", $this->mock->getBreed());
            $this->assertEquals("missingNo", $this->mock->getName());
            $this->assertInstanceOf(ZooAnimal::class, $this->mock);
        }

        public function testConstruct(): void /* WIP: If we keep testMockAbstract() is this test worth? or because
        concrete subclasses use the constructor there's no need anyways*/
        {
            $this->assertTrue(true);
        }
    }
?>
