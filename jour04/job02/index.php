<?php
	$i = 0;
	
	echo '<style>body{display: flex; justify-content: center; align-items: center;}
			td, th{border: solid 1px black;}</style>';
	echo '<table>';
	
	foreach($_GET as $key => $value){
		$i++;
		$nb = htmlspecialchars($_GET['input'.$i]);
		echo '<tr><th>'.$key.' :</th><td>'.$nb.'</td><br></tr>';
	}
	
	echo '</table>';
	
	// echo '<pre>';
	// echo implode($_GET);
	// echo '</pre>';
?>