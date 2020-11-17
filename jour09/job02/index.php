<?php
	$bdd = new mysqli('localhost', 'root', '', 'jour08');
	$bdd -> set_charset("utf8");
	
	if($bdd->connect_errno){
		echo 'Non connecté à la BDD :'.$bdd->connect_errno.'|'.$bdd->connect_error;
	}
	
	$table1 = $bdd->query('SELECT * FROM salles');
	
	echo '<table><thead><tr><th>Id</th><th>Nom</th><th>Id Etage</th><th>Capacité</th></tr><tbody>';
	
	while($ligne = $table1->fetch_assoc()){
		echo '<tr><td>'.$ligne['id'].'</td><td>'.$ligne['nom'].'</td><td>'.$ligne['id_etage'].'</td><td>'.$ligne['capacite'].'</td></tr>';
	}
	
	echo '</tbody></table>';
	echo '<style>th, td{border: solid 1px black; text-align: center;}</style>';
?>