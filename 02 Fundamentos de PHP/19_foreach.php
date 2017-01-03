<?php
	
	$meses = array (
	                 'Enero','Febrero','Marzo','Abril',
	                 'Mayo','Junio','Julio','Agosto',
	                 'Septiembre','Octubre','Noviembre','Diciembre'
	 );
	 
	$amigos = array( $alejandro => array ('telefono' => 54743221 , 'edad'  => 20, 'pais' => 'Mexico'),					
					      	 $pedro => array ('telefono' => 54743221 , 'edad'  => 20, 'pais' => 'Mexico'));
	 
	
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
                         //arreglo indexado
                          foreach($meses as $mes){
                                echo '<li>' . $mes . '</li>';
                         }
                         # El ciclo forefach tambien nos permite rerrorer arreglos asosiativos.
                         foreach($amigos as $datos =>$valores)
                         {
                              foreach($valores as $dato =>$valor)
                     	    {
                     	         echo '<li>' . $dato . ' : ' . $valor. '</li>';
                	           }
                	       }
                          ?>
                   </ul>
  </body>
  </html>