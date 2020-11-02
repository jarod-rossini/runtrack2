<?php
	$bool = true;
	$nb = 10;
	$str = 'jarod';
	$float = 0.1;
	
	echo '<table>';
		echo '<tr>';
			echo '<th>'.'type'.'</th>';
			echo '<th>'.'nom'.'</th>';
			echo '<th>'.'valeur'.'</th>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>'.'Booléen'.'</td>';
			echo '<td>'.'bool'.'</td>';
			echo '<td>'.$bool.'</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>'.'Entier'.'</td>';
			echo '<td>'.'nb'.'</td>';
			echo '<td>'.$nb.'</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>'.'Chaîne de caractères'.'</td>';
			echo '<td>'.'str'.'</td>';
			echo '<td>'.$str.'</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>'.'Nombre à virgule'.'</td>';
			echo '<td>'.'float'.'</td>';
			echo '<td>'.$float.'</td>';
		echo '</tr>';
	echo '</table>';
	
	//*STYLE*
	
	echo '<style>';
		echo 'body{display: flex; justify-content: center; align-items: center;}';
			echo 'table, th, td{border: solid 2px black; background-color: black;}';
				echo 'th, td{background-color: gray; color: white;}';
				echo 'th{text-decoration: underline;}';
	echo '</style>';
?>