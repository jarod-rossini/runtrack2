<?php
	$nombre = $_GET['nombre'];
	
	if(is_int($nombre/2)){echo 'Nombre pair';}
	else{echo 'Nombre impair';}
?>