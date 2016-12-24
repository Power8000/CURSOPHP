<?php

$meses = array(
  'Enero','Febrero','Marzo','Abril',
  'Mayo','Junio','Julio','Agosto',
  'Septiembre','Octubre','Noviembre','Diciembre'
);
$numeros = array(1,23,34,123,34,3,2);
#sort($meses);//Ordenar
rsort($meses);//desordenar
sort($numeros);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meses del Año</title>
  </head>
  <body>
    <h1>Meses del Año</h1>
    <ul>
      <?php
/*      foreach ($meses as $mes ) {
        echo '<li>' . $mes . '</li>';
      }  */
      foreach ($numeros as $numero) {
        echo '<li>' . $numero . '</li>';
      }
       ?>
    </ul>
  </body>
</html>
