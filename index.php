<?php
    include "classes/FoodInfo.php";
    include "classes/Canine.php";
    $dogFoodInfo = new FoodInfo("Carnivoro");
    $dog1 = new Canine("Husky", "gepeto", $dogFoodInfo);
    $dog2 = new Canine("Puddle", "Nubecita", $dogFoodInfo);
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
