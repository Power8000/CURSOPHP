<?php
	
	$meses = array (
	                 'Enero','Febrero','Marzo','Abril',
	                 'Mayo','Junio','Julio','Agosto',
	                 'Septiembre','Octubre','Noviembre','Diciembre'
	 );
	 
	 $alejandro = array ('telefono' => 54743221 , 'edad'  => 20, 'pais' => 'Mexico');
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
          <meta charset="UTF-8">
          <title> Document</title>
 </head>
 <body>
                <ul>
                         <?php
                         # Con el ciclo foreach podemos recorrer arreglos de una manera muy facil.
                          foreach($meses as $mes){
                                echo '<li>' . $mes . '</li>';
                         }
                         # El ciclo foreach tambien nos permite rerrorer arreglos asosiativos.
                         foreach($alejandro as $dato =>$valores)
                         {
                              echo '<li>' . $dato . ' : ' . $valores. '</li>';
                          }
                          ?>
                   </ul>
  </body>
  </html>