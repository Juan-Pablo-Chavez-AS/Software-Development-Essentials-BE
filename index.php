<?php
    include_once "classes/FoodInfo.php";
    include_once "classes/Canine.php";
    include_once "classes/Cetacean.php";
    include_once "classes/ZooHabitat.php";

    $dogFoodInfo = new FoodInfo("Carnivore");

    $dog1ExtraInfo = [
        "Found" => "He was found in a woodshop",
    ];
    $dog2ExtraInfo = [
        "Origin" => "Puddles were made for fancy millionares",
    ];
    $dog3ExtraInfo = [
        "Gender" => "Hasn't decided yet",
        "AKA" => "Big Boss",
    ];

    $dog1 = new Canine("Husky", "Pinocchio", $dogFoodInfo, $dog1ExtraInfo);
    $dog2 = new Canine("Puddle", "Cloudy", $dogFoodInfo, $dog2ExtraInfo);
    $dog3 = new Canine("Golden Retriever", "Boss", $dogFoodInfo, $dog3ExtraInfo);
    $dogs = [
        $dog1,
        $dog2,
        $dog3,
    ];

    array_walk_recursive($dogs, function(ZooAnimal $dog) {
        echo $dog->getAllInfo();
        echo "<hr>";
    });
    $dogs = array_reverse($dogs);
    $caninesHabitat = new ZooHabitat(Canine::class, "The Dog House");
    $caninesHabitat->addAnimals([]);
    $caninesHabitat->addAnimals($dogs);

    echo $caninesHabitat->habitatInfo();
?>
