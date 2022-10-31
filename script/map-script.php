<?php

// set a gridsize and check that it is not negative
$gridSize = $_POST["gridsize"];
if ($gridSize < 0) {
    $gridSize = 10;
}

$squareNumber = intval($gridSize) * intval($gridSize);

$terrainArray = [];

// get terrain values after input
$qtOfHill = (int)$_POST["hill"];
$qtOfDesert = (int)$_POST["desert"];
$qtOfForest = (int)$_POST["forest"];
$qtOfLake = (int)$_POST["lake"];
$qtOfSwamp = (int)$_POST["swamp"];
$qtOfMountain = (int)$_POST["mountain"];
$qtOfPlain = (int)$_POST["plain"];
$qtOfVolcano = (int)$_POST["volcano"];

$totalQuantity = $qtOfHill + $qtOfVolcano + $qtOfDesert + $qtOfForest + $qtOfLake + $qtOfMountain + $qtOfSwamp + $qtOfPlain;

//check that the sum of each terrain type is at least 100%
if ($totalQuantity < 100 || $totalQuantity > 100) {
    echo "<div class='warning'><p>Oops... The sum of each terrain type must be equal to 100%, sorry!</p></div>";
} else {

    // set terrain proportion/quantity in percentage (%)
    $qtOfHill = ceil($_POST["hill"] * $squareNumber / 100);
    $qtOfDesert = ceil($_POST["desert"] * $squareNumber / 100);
    $qtOfForest = ceil($_POST["forest"] * $squareNumber / 100);
    $qtOfLake = ceil($_POST["lake"] * $squareNumber / 100);
    $qtOfSwamp = ceil($_POST["swamp"] * $squareNumber / 100);
    $qtOfMountain = ceil($_POST["mountain"] * $squareNumber / 100);
    $qtOfPlain = ceil($_POST["plain"] * $squareNumber / 100);
    $qtOfVolcano = ceil($_POST["volcano"] * $squareNumber / 100);

// reset the values if they are negative or empty
    if ($qtOfHill < 0 || empty(trim($qtOfHill))) {
        $qtOfHill = 0;
    }
    if ($qtOfDesert < 0 || empty(trim($qtOfDesert))) {
        $qtOfDesert = 0;
    }
    if ($qtOfForest < 0 || empty(trim($qtOfForest))) {
        $qtOfForest = 0;
    }
    if ($qtOfLake < 0 || empty(trim($qtOfLake))) {
        $qtOfLake = 0;
    }
    if ($qtOfSwamp < 0 || empty(trim($qtOfSwamp))) {
        $qtOfSwamp = 0;
    }
    if ($qtOfMountain < 0 || empty(trim($qtOfMountain))) {
        $qtOfMountain = 0;
    }
    if ($qtOfPlain < 0 || empty(trim($qtOfPlain))) {
        $qtOfPlain = 0;
    }
    if ($qtOfVolcano < 0 || empty(trim($qtOfVolcano))) {
        $qtOfVolcano = 0;
    }

// stock all the terrain type in a big array
    if ($qtOfHill != 0) {
        for ($i = 0; $i < $qtOfHill; $i++) {
            array_push($terrainArray, "hill");
        }
    }

    if ($qtOfDesert != 0) {
        for ($i = 0; $i < $qtOfDesert; $i++) {
            array_push($terrainArray, "desert");
        }
    }

    if ($qtOfForest != 0) {
        for ($i = 0; $i < $qtOfForest; $i++) {
            array_push($terrainArray, "forest");
        }
    }

    if ($qtOfLake != 0) {
        for ($i = 0; $i < $qtOfLake; $i++) {
            array_push($terrainArray, "lake");
        }
    }

    if ($qtOfSwamp != 0) {
        for ($i = 0; $i < $qtOfSwamp; $i++) {
            array_push($terrainArray, "swamp");
        }
    }

    if ($qtOfMountain != 0) {
        for ($i = 0; $i < $qtOfMountain; $i++) {
            array_push($terrainArray, "mountain");
        }
    }

    if ($qtOfPlain != 0) {
        for ($i = 0; $i < $qtOfPlain; $i++) {
            array_push($terrainArray, "plain");
        }
    }

    if ($qtOfVolcano != 0) {
        for ($i = 0; $i < $qtOfVolcano; $i++) {
            array_push($terrainArray, "volcano");
        }
    }

// shuffle randomly the array
    shuffle($terrainArray);

// divide the big array (100 elements) into a 2D array (10x10 elements)
    $terrainType = [];
    for ($i = 0; $i < $gridSize; $i++) {
        $terrainType[$i] = array_splice($terrainArray, 0, $gridSize);
    }
}
