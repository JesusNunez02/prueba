<?php
//ingresar edad
$edad=20;

if ($edad < 12) {
    echo "No puede ingresar sin socio o representante.";
} elseif ($edad >= 12 && $edad <= 18) {
    echo "Puede ingresar con autorización del socio.";
} else ($edad > 18) {
    echo "Puede ingresar con su carnet o pase otorgado por un socio.";
}


?>