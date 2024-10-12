<?php
$cantidadCauchos=6;

$precio_por_menos5_cauchos = 800;
$precio_por_mas5_cauchos = 700;

if ($cantidadCauchos < 5) {
    $precioTotal = $cantidadCauchos * $precio_por_menos5_cauchos;
} else {
    $precioTotal = $cantidadCauchos * $precio_por_mas5_cauchos;
}

echo "El total a pagar por " . $cantidadCauchos . " cauchos es de Bs. " . $precioTotal;
?>

