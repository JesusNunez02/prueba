<?php
$monto = 15000;
$Personas = 100;
$edades = [];

for ($i = 0; $i < $Personas; $i++) {
    $edad = rand(1, 100);
    $recibe = $edad * 10;

    if ($monto >= $recibe) {
        $edades[] = $edad;
        $monto -= $recibe;
    } else {
        break;
    }
}

$numeroPersonas = count($edades);

echo "Al influencer le quedaron $monto euros";

?>