<?php
//if(condicion){
//   Instrucciones
//}
/* Operadores de comparacion:
== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion

*/

/* Operadores logicos:

&&  - Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condicion
xor - Evalua que se cumpla una y soslo una condicion

*/
$edad = 18;
$nombre = 'Carlos';
if ($edad>17 && $nombre == 'Carlos') {
  echo '<h1> Bienvenido </h1>';
}
if($edad <18 or $nombre != 'Carlos'){
  echo '<h1> Eres menor de edad y/o no te llamas Carlos </h1>';
}
?>
