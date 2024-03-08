<?php 
$animals1 = ["いぬ" => 1, "ねこ" => 2, "うさぎ" => 6];
$animals2 = ["ぞう" => 1, "きりん" => 1, "さい" => 4];
$animalsList = ["小動物" => $animals1, "大動物" => $animals2];

$limmitAnimal = [];
foreach($animalsList as $animals) {
    foreach($animals as $animalName => $animalNum) {
        if(1 < $animalNum) {
            $limmitAnimal[] = $animalName;
        }
    }
}
echo implode('<br>', $limmitAnimal);

