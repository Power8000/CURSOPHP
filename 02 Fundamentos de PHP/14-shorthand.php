<?php
#OPERADOR TENARIO O OPERADOR CORTO DE UNA CONDICIONAL
$edad = 18;
$edad = (isset($edad)) ? $edad:'El usuario no establecio su edad' ;

if(isset($edad)){
  $edad = $edad;
} else{
  $edad = 'El usuario no establecio su edad';
}
echo 'Edad' . $edad . '</br>';
echo "Tu edad es $edad " ;
?>
