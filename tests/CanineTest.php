<?php
    include_once "./classes/Canine.php";
    include_once "./classes/FoodInfo.php";

    class CanineTest
    {

        public function testMove()
        {
            $foodInfo = new FoodInfo("Carnivore");
            $canine = new Canine("Husky", "Pedrito", $foodInfo);
            $result = $canine->move();
            $expectedResult = "walk";

            echo $result == $expectedResult ? "True" : "False";
        }

        public function testMoveWithoutFood()
        {
            $canine = new Canine("Husky", "Pedrito");
            $result = $canine->move();
            $expectedResult = "sleep";
            echo $result == $expectedResult ? "True" : "False";
        }
    }
?>
