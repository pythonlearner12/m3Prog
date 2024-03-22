<?php
include_once("functions.php");


//Vliegreis van 3722 km, Kerosine prijs 2.05, Bagage 20 kilo, Economy class
vliegkosten(3722, 2.05, 20, false);
//Vliegreis van 9276 km, Kerosine prijs 3.11, Bagage 10 kilo, Economy class
vliegkosten(9276, 3.11, 10, false);
//Vliegreis van 803 km, Kerosine prijs 2.83, Geen bagage, Business class
vliegkosten(803, 2.83, 0, true);


//$afstand_km, $liter_prijs, $bagage_kilo, $business_class
//vliegkosten(3722, 2.05, 20, false)