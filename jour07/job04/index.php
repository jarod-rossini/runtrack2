<?php
	if(isset($_COOKIE['prenom'])){
		echo 'Bonjour '.$cookie_name;
	}
	elseif(isset($_POST['connexion'])){
		$_COOKIE['prenom'] = $_POST['prenom'];
		$cookie_name = $_COOKIE['prenom'];
		echo 'Bonjour '.$cookie_name;
	}
?>

<html>
	<head>
	</head>
	<body>
		<form method="post">
				<input type="text" name="prenom"/>
				<input type="submit" name="connexion" value="connexion"/>
		</form>
	</body>
</html>