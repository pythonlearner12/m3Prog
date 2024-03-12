<?php


$games = ["Zelda", "Minecraft", "Roblox", "Pokemon", "Digimon"];
//var_dump($games);
print_r($games);

//waarom pushed minesweep nadat er gesort is al word het eerder gezet dan sort?
array_push($games, "minesweep");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$games[2];?></p>
    <p><?=$games[4];?></p>    
    <p><?=count($games);?></p>
    <p><?=sort($games);?></p>
    <p><?=implode(", ", $games);?></p>
    
</body>
</html>