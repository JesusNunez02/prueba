<?php
$edades = [8, 1, 3, 45, 32, 15, 20, 60, 40, 38, 55, 75, 42, 25, 22, 15, 54, 7, 34, 56];
$niños = 0;
$jovenes = 0;
$adultos = 0;
$viejos = 0;


foreach ($edades as $edad) {
    if ($edad >= 0 && $edad <= 13) {
        $niños++;
    } 
    elseif ($edad >=14 && $edad <= 29) {
        $jovenes++;
    } 
    elseif ($edad >= 30 $$ $edad <= 59) {
        $adultos++;
    } 
    else {
        $viejos++;
    }
}


echo "Cantidad de niños: $niños";
echo "Cantidad de jóvenes: $jovenes";
echo "Cantidad de adultos: $adultos";
echo "Cantidad de viejos: $viejos";


?>