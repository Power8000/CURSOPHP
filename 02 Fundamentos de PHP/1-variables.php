<?php
//Cadena de texto
$nombre = 'Carlos';
#Numero enteros
$numero = 7;
#Numero decimal
$numero_decimal = 7.7;
#Verdadero o falso (true /false)
$verdadero = false;

#Array: Arreglo
#Object: Objeto
#Class: Clase
#Null: Cuando a una variable aun no se le ha asigando ningun valor
/*
echo $nombre;
echo $numero;
echo $numero_decimal;
echo $verdadero;
echo "Hola, $nombre";
echo 'Hola, '.$nombre;*/
echo gettype($nombre);
echo '<br>';
echo gettype($numero);
//Comillas Sencillas vs Comillas Dobles
# En las comillas dobles podemos llamr variables, mientras que en las comillas sensillas no.
# Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.
 ?>
