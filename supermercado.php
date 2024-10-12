<?php

$tCompra=1200;
$aleatorio=rand(1,100);
echo "el numero aleatorio fue: ", $aleatorio, '<br>';

if ($aleatorio<50)
   {
       $descuento=$tCompra*15/100;
   }
elseif ($aletorio=50 && $aletorio<=80)
   {
       $descuento=tCompra*20/100;
   }
else
   {
      $descuento=$tCOmpra*30/100;
   }

echo " El precio es: ", $tCompra, " el descuento es:", $descuento, " usted pagara: ", $tCompra-descuento;





?>