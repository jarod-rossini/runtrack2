<?php
	$table = array(200,204,173,98,171,404,459);
	for($i = 0; $i<sizeof($table); $i++){
		if(is_int($table[$i]/2)){ echo $table[$i].' est pair<br>';}
		elseif(is_float($table[$i]/2)){ echo $table[$i].' est impair<br>';}
	}
?>