<?php

$notas = [80, 100, 84, 65, 92, 74, 58, 86, 55, 47, 73, 38, 86, 48, 93, 52, 94, 57, 77, 46];
$reprobados = 0;

foreach ($notas as $n) {
    if ($n < 70) {
        $reprobados++;
    }
}

$total_alumnos = count($notas);
$porcentaje_reprobados = ($reprobados/$total_alumnos) * 100;


echo "El porcentaje de estudiantes reprobados es:$porcentaje_reprobados% ";