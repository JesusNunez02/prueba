<?php
// Función para calcular las pulsaciones por 10 segundos
function calcularPulsaciones($edad, $sexo)
 
    // Verificar el sexo y aplicar la fórmula correspondiente

    if ($sexo = 'femenino') 
    {
        $pulsaciones = (220 - $edad) / 10;
    } elseif ($sexo = 'masculino') {
        $pulsaciones = (210 - $edad) / 10;
    } 
else 
    {
      
    // Redondear el resultado a un número entero
    return round($pulsaciones);
}

$edad = 16;
$sexo = 'femenino';

$resultado = calcularPulsaciones($edad, $sexo);

echo "Una persona de $edad años y sexo $sexo debe tener aproximadamente $resultado pulsaciones cada 10 segundos de ejercicio aeróbico.";


?>