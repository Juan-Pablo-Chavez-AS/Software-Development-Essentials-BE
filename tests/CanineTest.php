<?php
    include_once "./classes/Canine.php";
    include_once "./classes/FoodInfo.php";

    use PHPUnit\Framework\TestCase;

    class CanineTest extends TestCase
    {

        private Canine $testCanine;

        public function setUp(): void
        {
            $foodInfo = new FoodInfo("Carnivore");
            $this->testCanine = new Canine("Husky", "Pedrito", $foodInfo);
        }

        public function testMove(): void
        {
            $result = $this->testCanine->move();
            $expectedResult = "walk";

            $this->assertEquals($expectedResult, $result);
        }

        public function testMoveWithoutFood(): void
        {
            $this->testCanine->setFoodInfo(null);
            $result = $this->testCanine->move();
            $expectedResult = "sleep";

            $this->assertEquals($expectedResult, $result);
        }

        public function testDrinkWater()
        {
            $result = $this->testCanine->drinkWater();
            $expectedResult = "This canine drinks water";

            $this->assertEquals($expectedResult, $result);
        }

        public function testGetSpecie()
        {
            $result = $this->testCanine->getSpecie();
            $expectedResult = "Canine";

            $this->assertEquals($expectedResult, $result);
        }

        public function testConstruct()
        {
            $newCanine = new Canine("Mixed", "Doggy");

            $this->assertNotNull($newCanine);
        }
    }
?>
