<?php
	$str = 'Certaines choses changent, et d\'autres ne changeront jamais';
	
	$table = array();
	
	for($i = 0; $i<strlen($str); $i++){
		$nb = substr($str, $i, 1);
		$table[$i] = $nb;
	}
	
	array_push($table, reset($table));
	array_shift($table);
	
	echo '<pre>';
		print_r($table);
	echo '</pre>';
?>