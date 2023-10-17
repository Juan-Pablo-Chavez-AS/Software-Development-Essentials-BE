<?php

    include_once "classes/FoodInfo.php";
    include_once "classes/InfoDefaultValues.php";

    use PHPUnit\Framework\TestCase;

    class ZooAnimalTest extends TestCase
    {

        private const DEFAULT_NAME = "MissingNo";
        private const DEFAULT_BREED = "Abstract";
        private const DEFAULT_EXTRA_INFO = ["extra" => "info"];

        private ZooAnimal $zooAnimal;

        public function setUp(): void
        {
            $foodInfo = InfoDefaultValues::getDefaultFoodInfo();
            $this->zooAnimal = new class(ZooAnimalTest::DEFAULT_BREED,
                ZooAnimalTest::DEFAULT_NAME,
                $foodInfo,
                ZooAnimalTest::DEFAULT_EXTRA_INFO) extends ZooAnimal {

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

        public function testGetFoodInfo(): void
        {
            $result = $this->zooAnimal->getFoodInfo();

            $this->assertEquals(InfoDefaultValues::getDefaultFoodInfo(), $result);
        }

        public function testSetFoodInfo(): void
        {
            $newFoodInfo = new FoodInfo("Herbivore");

            $this->zooAnimal->setFoodInfo($newFoodInfo);

            $this->assertSame($newFoodInfo, $this->zooAnimal->getFoodInfo());
        }

        public function testGetName(): void
        {
            $result = $this->zooAnimal->getName();

            $this->assertEquals(ZooAnimalTest::DEFAULT_NAME, $result);
        }

        public function testSetName(): void
        {
            $newName = "John";

            $this->zooAnimal->setName($newName);

            $this->assertEquals($newName, $this->zooAnimal->getName());
        }

        public function testGetBreed(): void
        {
            $result = $this->zooAnimal->getBreed();

            $this->assertEquals(ZooAnimalTest::DEFAULT_BREED, $result);
        }

        public function testSetBreed(): void
        {
            $newBreed = "Animal";

            $this->zooAnimal->setBreed($newBreed);

            $this->assertEquals($newBreed, $this->zooAnimal->getBreed());
        }

        public function testGetExtraInfoAsArray(): void
        {
            $result = $this->zooAnimal->getExtraInfoAsArray();

            $this->assertEquals(ZooAnimalTest::DEFAULT_EXTRA_INFO, $result);
        }

        public function testSetExtraInfo(): void
        {
            $newExtraInfo = ["new" => "info"];

            $this->zooAnimal->setExtraInfo($newExtraInfo);

            $this->assertEquals($newExtraInfo, $this->zooAnimal->getExtraInfoAsArray());
        }

        public function testGetExtraInfo(): void
        {
            $result = $this->zooAnimal->getExtraInfo();
            $expectedResult = "extra: info<br>";

            $this->assertEquals($expectedResult, $result);
        }

        public function testGetAllInfo(): void
        {
            $result = $this->zooAnimal->getAllInfo();

            $foodInfoValue = $this->zooAnimal->getFoodInfo()->getFoodInfo();
            $extraInfoKey = array_keys(ZooAnimalTest::DEFAULT_EXTRA_INFO);
            $expectedResult = "Name: " . ZooAnimalTest::DEFAULT_NAME
                . ".<br>Breed: " . ZooAnimalTest::DEFAULT_BREED
                . "<br>Food: $foodInfoValue<br>"
                . $extraInfoKey[0] . ": " . ZooAnimalTest::DEFAULT_EXTRA_INFO[$extraInfoKey[0]] . "<br>";

            $this->assertEquals($expectedResult, $result);
        }

        public function testGetAllInfoWithoutFood(): void
        {
            $this->zooAnimal->setFoodInfo(null);

            $result = $this->zooAnimal->getAllInfo();

            $extraInfoKey = array_keys(ZooAnimalTest::DEFAULT_EXTRA_INFO);
            $expectedResult = "Name: " . ZooAnimalTest::DEFAULT_NAME
                . ".<br>Breed: " . ZooAnimalTest::DEFAULT_BREED
                . "<br>Food: Unkown<br>"
                . $extraInfoKey[0] . ": " . ZooAnimalTest::DEFAULT_EXTRA_INFO[$extraInfoKey[0]] . "<br>";

            $this->assertEquals($expectedResult, $result);
        }
    }
?>
