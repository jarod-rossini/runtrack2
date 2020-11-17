<?php
	$bdd = new mysqli('localhost', 'root', '', 'jour08');
	$bdd->set_charset('utf8');
	
	$i = 0;
	
	if($bdd->connect_errno){
		echo 'Beh sa march pa wtf'.$bdd->connect_errno.'|'.$bdd->connect_error;
	}
	
	$table1 = $bdd->query('SELECT id FROM etudiants');
	
	echo '<table><thead><tr><th>Nombre d\'étudiants</th></tr></thead><tbody>';
	
	while($ligne = $table1->fetch_assoc()){
		$ligne['id'];
		$i++;
	}
	
	echo '<tr><td>'.$i.'</td></tr></tbody></table>';
	echo '<style>td, th{border: solid 1px black; text-align: center;}</style>';
?>