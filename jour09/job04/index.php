<?php
	$bdd = new mysqli('localhost', 'root', '', 'jour08');
	$bdd->set_charset('utf8');
	
	if($bdd->connect_errno){
		echo 'Beh sa march pa wtf'.$bdd->connect_errno.'|'.$bdd->connect_error;
	}
	
	$table1 = $bdd->query('SELECT * FROM etudiants WHERE prenom LIKE \'T%\'');
	
	echo '<table><thead><tr><th>Id</th><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>E-mail</th></tr></thead><tbody>';
	
	while($ligne = $table1->fetch_assoc()){
		echo '<tr><td>'.$ligne['id'].'</td><td>'.$ligne['prenom'].'</td><td>'.$ligne['nom'].'</td><td>'.$ligne['naissance'].'</td><td>'.$ligne['sexe'].'</td><td>'.$ligne['email'].'</td></tr>';
	}
	
	echo '</tbody></table>';
	echo '<style>td, th{border: solid 1px black; text-align: center;}</style>';
?>