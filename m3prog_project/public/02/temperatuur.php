<?php

function celsiusToFahrenheit($celsius) {
    return ($celsius * 1.8) + 32;
}

function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}

function kelvinToCelsius($kelvin) {
    return $kelvin - 273.15;
}


$celsiusValue = 25;
$kelvinValue = 298;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?="$celsiusValue graden Celsius = ". celsiusToFahrenheit($celsiusValue) . " graden Fahrenheit.";?></p>

    <p><?="$celsiusValue graden Celsius = " . celsiusToKelvin($celsiusValue) . " Kelvin.";?></p>

    <p><?="$kelvinValue Kelvin = " . kelvinToCelsius($kelvinValue) . " graden Celsius."?></p>
    
</body>
</html>