<?php
	$i = 0;
	
	echo '<style> body{display: flex; justify-content: center; align-items: center;}
			td, th{border: solid 1px black;}</style>';
			
	echo '<table>';
	
	foreach($_POST as $key => $value){
		$i++;

		echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr><br>';
	}
	
	echo '</table>';
?>