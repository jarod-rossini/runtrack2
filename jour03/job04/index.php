<?php
	$str = 'Dans l\'espace, personne ne vous entend crier';
	$count = 0;
	
	for($i = 0; $i<strlen($str); $i++){
		$lettre = substr($str, $i, 1);
		$table[$i] = $lettre;
		print_r($table[$i]);
		$count++;
	}
	
	echo '<br> Nombre de lettres : '.$count;
?>