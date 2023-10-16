<?php
    include_once "./classes/Cetacean.php";
    include_once "./classes/FoodInfo.php";

    use PHPUnit\Framework\TestCase;

    class CetaceanTest extends TestCase
    {

        private Cetacean $testCetacean;

        public function setUp(): void
        {
            $foodInfo = new FoodInfo("Carnivore");
            $this->testCetacean = new Cetacean("Blue Whale", "Alberth", $foodInfo);
        }

        public function testMove(): void
        {
            $result = $this->testCetacean->move();
            $expectedResult = "Cetaceans swim.";

            $this->assertEquals($expectedResult, $result);
        }

        public function testGetSpecie()
        {
            $result = $this->testCetacean->getSpecie();
            $expectedResult = "Cetacean";

            $this->assertEquals($expectedResult, $result);
        }

        public function testConstruct()
        {
            $newCetacean = new Cetacean("White Shark", "Chester");

            $this->assertNotNull($newCetacean);
            $this->assertInstanceOf(Cetacean::class, $newCetacean);
        }
    }
?>
