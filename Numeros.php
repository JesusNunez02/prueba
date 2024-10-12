<?php
//Valores establecidos
$numeros=[4,19,21,6,-9,5,0,48,0,72,-87,140,24,45,-25,0,17,74,92,-115];
$numerosPositivos=0;
$numerosNegativos=0;
$numerosNeutros=0;

//Clasificación de valores
foreach ($numeros as $n) {

if ($n>0) {

    $numerosPositivos++;
}
elseif ($n<0){

    $numerosNegativos++;
}
else {

    $numerosNeutros++;
}
}

//Resultados
echo "La cantidad de números positivos es:$numerosPositivos <br>";
echo "La cantidad de números negativos es: $numerosNegativos <br>";
echo "La cantidad de números neutros es: $numerosNeutros <br>";

?>