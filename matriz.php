<?php
// Creamos una matriz vacía de 4x4
//$matriz = array();
$matriz=[];

// Llenamos la matriz con números aleatorios
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 20);
    }
}

//echo $matriz[8][8];

/* Imprimimos la matriz en formato de tabla para mejor visualización
Dentro del lenguaje de diseño web, las tablas HTML se crean usando las etiquetas <table> y </table>. 
En ella se incluyen dos etiquetas importantes: <tr>, que es para crear filas de tablas y <td>, para crear celdas de datos.
Todo lo que esté dentro de ambas etiquetas es el contenido de la celda de la tabla.
//print_r($matriz);
//var_dump($matriz);

   foreach ($matriz as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
     echo "<br>";
}*/

echo "<table border='1'>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td>" ."posicion". $i,$j."=".  $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>