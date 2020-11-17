<?php
	$bdd = new mysqli('localhost', 'root', '', 'jour08');
	$bdd->set_charset('utf8');
	
	if($bdd->connect_errno){
		echo 'Ca marche pas ptn'.$bdd->connect_errno.'|'.$bdd->connect_error;
	}
	
	$table1 = $bdd->query('SELECT * FROM etudiants WHERE sexe = \'Femme\'');
	
	echo '<table><thead><tr><th>Prénom</th><th>Nom</th><th>Naissance</th></tr></thead><tbody>';
	
	while($ligne = $table1->fetch_assoc()){
		echo '<tr><td>'.$ligne['prenom'].'</td><td>'.$ligne['nom'].'</td><td>'.$ligne['naissance'].'</td></tr>';
	}
	
	echo '</tbody></table>';
	echo '<style>th, td{border: solid 1px black; text-align: center;}</style>';
?>