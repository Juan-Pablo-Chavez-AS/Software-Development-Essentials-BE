<?php
    include_once "./classes/Canine.php";
    include_once "./classes/FoodInfo.php";

    use PHPUnit\Framework\TestCase;

    class CanineTest extends TestCase
    {

        public function testMove()
        {
            $foodInfo = new FoodInfo("Carnivore");
            $canine = new Canine("Husky", "Pedrito", $foodInfo);
            $result = $canine->move();
            $expectedResult = "walk";

            $this->assertEquals($expectedResult, $result);
        }

        public function testMoveWithoutFood()
        {
            $canine = new Canine("Husky", "Pedrito");
            $result = $canine->move();
            $expectedResult = "sleep";
            $this->assertEquals($expectedResult, $result);
        }
    }
?>
