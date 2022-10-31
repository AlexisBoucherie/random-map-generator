<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>RPG | Map Generator</title>
</head>
<body>

<h1>Random Map Generator</h1>

<?php require_once "script/map-script.php"; ?>

<table>
    <?php
    if (isset($terrainType)) {
        for ($x = 0; $x < $gridSize; $x++) {
            echo "<tr>";
            for ($y = 0; $y < $gridSize; $y++) {
                echo "<td class=" . $terrainType[$x][$y] . "></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</table>
<div class="btn-container">
    <a href="index.php">Go back</a>
</div>
</body>
</html>

