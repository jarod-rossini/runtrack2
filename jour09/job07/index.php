<?php
	$bdd = new mysqli('localhost', 'root', '', 'jour08');
	$bdd->set_charset('utf8');
	
	if($bdd->connect_errno){
		echo 'Beh sa march pa wtf'.$bdd->connect_errno.'|'.$bdd->connect_error;
	}

	$bdd->query('ALTER TABLE etage ADD superficie_totale INT');
	
	$result = $bdd->query('SELECT SUM(superficie) AS superficie_totale FROM etage');
	
	echo '<table><thead><tr><th>Superficie Totale</th></tr></thead><tbody>';
	
	while($ligne = $result->fetch_assoc()){
		echo '<tr><td>'.$ligne['superficie_totale'].'</td><tr>';
	}
	
	echo '</tbody></table>';
	echo '<style>td, th{border: solid 1px black; text-align: center;}</style>';
?>