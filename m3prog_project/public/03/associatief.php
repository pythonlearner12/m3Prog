<?php

/*
Televisie: 230 kWh per jaar.
Wasmachine: 125 kWh per jaar.
Hottub: 2000 kWh per jaar.
Wasdroger: 300 kWh per jaar 
Elektrische boiler: 1900 kWh per jaar
*/
$verbruik = ["key" => "Televisie", "value" => 230, "key2" => "Wasmachine", "value2" => 125, "key3" => "Hottub", "value3" => 2000, "key4" => "Wasdroger", "value4" => 300, "key5" => "kooker", "value5" => 1900];

foreach ($verbruik as $key => $val) {
    echo $key . ": " . $val . "<br>";
}
