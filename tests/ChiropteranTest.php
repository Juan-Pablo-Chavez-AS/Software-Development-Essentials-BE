<?php
    include_once "./classes/Chiropteran.php";
    include_once "./classes/FoodInfo.php";

    use PHPUnit\Framework\TestCase;

    class ChiropteranTest extends TestCase
    {

        private Chiropteran $testChiropteran;

        public function setUp(): void
        {
            $foodInfo = new FoodInfo("Carnivore");
            $this->testChiropteran = new Chiropteran("Bat", "Batsy", $foodInfo);
        }

        public function testMove(): void
        {
            $result = $this->testChiropteran->move();
            $expectedResult = "Bats are the only mammal that flies.";

            $this->assertEquals($expectedResult, $result);
        }

        public function testDrinkWater()
        {
            $result = $this->testChiropteran->drinkWater();
            $expectedResult = "This Chiropteran drinks water";

            $this->assertEquals($expectedResult, $result);
        }

        public function testGetSpecie()
        {
            $result = $this->testChiropteran->getSpecie();
            $expectedResult = "Chiropteran";

            $this->assertEquals($expectedResult, $result);
        }

        public function testConstruct()
        {
            $newCanine = new Chiropteran("Bat", "Ben Affleck");

            $this->assertNotNull($newCanine);
        }
    }
?>
