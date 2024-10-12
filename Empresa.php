<?php
  $nombres = ["Héctor","Diego", "Johan"];
  $horas = [78,60,28];
  $pagoRegular= 20;
  $pagoHorasExtras= 25;    
  $pago=0;
   
  for ($i=0; $i<count($horas);$i++)
   {
       if ($horas[$i]<=40) 
       {
           $pago = ($horas[$i]*$pagoRegular);
       }
       else
       {
           $pago = 40*$pagoRegular + ($horas[$i]-40)*$pagoHorasExtras;  
       }
       echo "El Trabajador. $nombres[$i] cobrará  $pago <br>";  
   }
   
  


?>