<?php
//Ejemplo de Uso de count():
$numeros = [1,23,13,13,13,13,13,13,1,312,311,31,3,31,312,31,23,123,12];
echo count($numeros); // Esto imprimirá 11

$Dulces = ["Chocolate", "Galletas"];
array_push($Dulces, "Bombones"); // Agrega "Bombones" al final
print_r($Dulces); // Esto imprimirá: Array ( [0] => Chocolate [1] => Galletas [2] => Bombones )

$dulce_eliminado = array_pop($Dulces); // Elimina y obtiene "Bombones"
print_r($Dulces); // Esto imprimirá: Array ( [0] => Manzana [1] => Banana )
echo $dulce_eliminado; // Esto imprimirá: Naranja




?>