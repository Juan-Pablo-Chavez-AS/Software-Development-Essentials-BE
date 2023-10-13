<?php
    include "classes/FoodInfo.php";
    include "classes/Canine.php";

    $dogFoodInfo = new FoodInfo("Carnivore");

    $dog1ExtraInfo = [
        "Found" => "He was lost in a woodshop",
    ];
    $dog1ExtraInfo = [
        "Found" => "He was lost in a woodshop",
    ];

    $dog1 = new Canine("Husky", "Pinocchio", $dogFoodInfo, $dog1ExtraInfo);
    $dog2 = new Canine("Puddle", "Cloudy", $dogFoodInfo);
    $dog3 = new Canine("Golden Retriever", "Boss", $dogFoodInfo);

    $dogs = [
        $dog1,
        $dog2,
        $dog3,
    ];

    array_walk_recursive($dogs, function(ZooAnimal $dog) {
        echo $dog->getAllInfo();
        echo "<hr>";
    });

?>
