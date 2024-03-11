<?php
$woon_plek = "Amsterdam";
$vakantie_land = "Frankrijk";
$vakantie_plek = "Bordeaux";

$afstand_vankantie_plek = 1019.12 . "km";
$benzine_kosten = 95 . "euro voor 1 liter";


$benzine_gebruik = 15 . "km voor 1 liter";
$hoeveelheid_benzine = 50 . "liter";

$vakantie_plek_reis_liter_gebruik = floatval($afstand_vankantie_plek)/floatval($benzine_gebruik);
$hoe_vaak_tanken = ceil($vakantie_plek_reis_liter_gebruik/floatval($hoeveelheid_benzine));
$totaal_reis_kosten = $vakantie_plek_reis_liter_gebruik*floatval($benzine_kosten);


$trein_reis_kosten = 500;
$tankinhoud = 40 . "km per liter";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><?="afstand_vankantie_plek: " . floatval($afstand_vankantie_plek);?></p>
    <p><?="vakantie_plek_reis_liter_gebruik: " . $vakantie_plek_reis_liter_gebruik;?></p>
    <p><?="hoe_vaak_tanken: " . $hoe_vaak_tanken;?></p>
    <p><?="totaal_reis_kosten: " . $totaal_reis_kosten . " euro";?></p>
    <br></br>
    <p><?php
    
    if($totaal_reis_kosten < $trein_reis_kosten)
    {
        echo "auto is goedkoper dan trein";
    }
    
    else
    {
        echo "trein is goedkoper dan auto";
    }
    
    
    ?></p>
</body>
</html>