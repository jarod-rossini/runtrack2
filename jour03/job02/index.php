<?php
	$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie';
	
	for($i = 0; $i<strlen($str); $i=$i+2){
		echo substr($str, $i, 1).' ';
	}
	
?>