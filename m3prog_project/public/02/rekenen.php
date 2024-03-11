<?php

$getal = 123.45678;
$afgerond1 = ceil($getal);


$getal2 = 9876.54321;
$afgerond2 = floor($getal2);



$randomGetal1 = rand();
$randomGetal2 = rand();
$randomGetal3 = rand();
$uitkomst = $randomGetal1 + $randomGetal2;
$uitkomst /= $randomGetal3;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$afgerond1;?></p>
    <p><?=$afgerond2;?></p>
    <p><?=$uitkomst;?></p>
</body>
</html>