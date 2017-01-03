<?php
	
           $meses = array (
	                 'Enero','Febrero','Marzo','Abril',
	                 'Mayo','Junio','Julio','Agosto',
	                 'Septiembre','Octubre','Noviembre','Diciembre'
	 );
	 for($i = 0;$i < count($meses);$i++)
	 {
	 	
	 	echo $meses[$i] . '</br>';
	 }


	$cont = 0;
	while($cont < count($meses)){
		echo $meses[$cont] . '</br>';
		$cont++;
		}
	
 ?>