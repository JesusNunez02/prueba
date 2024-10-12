<?php
<?php
// Función para calcular las pulsaciones por 10 segundos
function calcularPulsaciones($edad, $sexo) {
    // Verificar el sexo y aplicar la fórmula correspondiente
    if ($sexo === 'femenino') {
        $pulsaciones = (220 - $edad) / 10;
    } else if ($sexo === 'masculino') {
        $pulsaciones = (210 - $edad) / 10;
    } else {
        return "Sexo no válido. Debe ser 'femenino' o 'masculino'";
    }

    // Redondear el resultado a un número entero
    return round($pulsaciones);
}

// Ejemplo de uso:
$edad = 30;
$sexo = 'femenino';

$resultado = calcularPulsaciones($edad, $sexo);

echo "Una persona de $edad años y sexo $sexo debe tener aproximadamente $resultado pulsaciones cada 10 segundos de ejercicio aeróbico.";



?>