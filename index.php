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
<div class="form-container">
    <form action="map.php" method="post">
        <h2>Parameters:</h2>
        <p>How much do you want of each terrain type? (in %)</p>
        <div class="rows">
            <label for="plain">Plains:</label>
            <input type="number" id="plain" name="plain">
        </div>
        <div class="rows">
            <label for="hill">Hills:</label>
            <input type="number" id="hill" name="hill">
        </div>
        <div class="rows">
            <label for="forest">Forests:</label>
            <input type="number" id="forest" name="forest">
        </div>
        <div class="rows">
            <label for="mountain">Mountains:</label>
            <input type="number" id="mountain" name="mountain">
        </div>
        <div class="rows">
            <label for="lake">Lakes:</label>
            <input type="number" id="lake" name="lake">
        </div>
        <div class="rows">
            <label for="swamp">Swamps:</label>
            <input type="number" id="swamp" name="swamp">
        </div>
        <div class="rows">
            <label for="desert">Deserts:</label>
            <input type="number" id="desert" name="desert">
        </div>
        <div class="rows">
            <label for="volcano">Volcanoes:</label>
            <input type="number" id="volcano" name="volcano">
        </div>
        <div id="percentage-div" class="">
            <div id="total-percentage"></div>
            <div> /100</div>
        </div>
        <p>How many squares per side do you need?</p>
        <div>
            <label for="gridsize">Map size:</label>
            <input type="number" id="gridesize" name="gridsize">
        </div>
        <div class="btn-container">
            <input type="submit" id="submit" value="Let's go!">
        </div>
    </form>
</div>
<script src="script/form-script.js"></script>
</body>
</html>