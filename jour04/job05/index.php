<?php
	//$_POST cache les données des <input/>
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == 'John' && $password == 'Rambo'){echo 'C\'est pas ma guerre';}
		else{echo 'Votre pire cauchemar';}
	
?>