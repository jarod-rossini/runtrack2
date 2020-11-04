<?php
	$str = 'Les choses que l\'on possede finissent pas nous posseder';
	
	$table = array();
	$invert = 54;
	
	for($index = 0; $index < strlen($str); $index++){
		$nb = substr($str, $invert, 1);
		$table[$index] = $nb;
		$invert--;
	}
	
	echo  implode('', $table);
	echo '<br>';
?>