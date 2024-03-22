<?php
/*
// Voorbeeld van een function met de naam current_date die de datum op het scherm zet

function currentDateTime(){
    // Toont de huidige datum en tijd met uren, minuten en seconden
    echo date('d-m-Y H:i:s');
}
currentDateTime(); // 03-09-2022 10:22:45
*/



function calc($symbol, $number1, $number2)
{
    $sum = eval("return $number1 $symbol $number2;");
    return $sum;
}

//echo calc("/", 10, 5);




function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{
    $kosten_euro = 0;

    // Hoeveel liter benzine heb je nodig?
    $aantal_liters = $afstand_km / $km_per_liter;

    // Kosten: aantal liter x literprijs
    $kosten_euro = $aantal_liters * $liter_prijs;
    echo number_format($kosten_euro, 2) . "\n";
    return $kosten_euro;
}

// Stel, je gaat een reis van 500 km maken, in een auto die 1 op 20 rijdt en een liter benzine kost € 2.45
// Dan kun je de function zo aanroepen en de kosten opslaan in een variabele
//$kosten = berekenRitKosten(500, 20, 2.45);

// Voor een reis van 1200km, auto die 1 op 10 rijdt en een bezine prijs van 1.89
//$kosten = berekenRitKosten(1200, 10, 1.89);


/**
 * berekent vlieg kosten.
 * afstand_km = float
 * liter_prijs = float
 * bagage_kilo = float
 * business_class = booleans
 * 
 * return waarde = float
 */
function vliegkosten($afstand_km, $liter_prijs, $bagage_kilo, $business_class)
{


    $kosten = ($liter_prijs * $afstand_km / 30) + (5 * $bagage_kilo);

    if ($business_class == true) {
        echo number_format($kosten * 1.5, 2) . "\n";
        return number_format($kosten * 1.5, 2);
    } else {
        echo number_format($kosten, 2) . "\n";
        return number_format($kosten, 2);
    }
}
