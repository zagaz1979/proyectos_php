<?php

   /*
   1. Realizar un programa en donde se pide la edad del usuario, si es mayor 
      de edad debe aparecer un mensaje indicandolo
   */

   /*
   $edad = 20;
   //$edad = 12; // La condicion daria falsa, por tanto no saldría el mensaje

   if ($edad >= 18) {
      echo "Eres mayor de edad";
   }
   */

/*    
  $edad = 27;

  if ($edad >= 18):
     echo "Eres mayor de edad";
  endif
*/

   /*   
   2. En un almacén se hace un 20% de descuento a los clientes cuya compra 
      supere los $100 ¿Cuál será la cantidad que pagará una persona 
      por su compra? 
   */

   $total = 120;

   if ($total > 100) {
      $total = $total - ($total * 0.20); 
   }

   //echo "El total a pagar es: $" . $total;
   echo "El total a pagar es: $$total";

?>