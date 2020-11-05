<?php
	$largeur = $_GET['largeur'];
	$hauteur = $_GET['hauteur'];
	
	$base1 = '';
	$base2 = '';
	
	$count = 0;
	
	echo '<style>body{display: flex; justify-content: center; align-items: center; text-align: center;}</style>';
	echo '/\ ';
	
	for($i = 0; $i<$largeur; $i++){
		$base1 = $base1.'__';
		$base2 = $base2.'&nbsp&nbsp&nbsp&nbsp';
		echo '<br>/'.$base1.'\ ';
		$count++;
	}
	
	for($a = 0; $a<$hauteur; $a++){
		echo '<br>|'.$base2.'|';
	}
	
	echo '<br>|'.$base1.'|';
?>