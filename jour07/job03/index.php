<?php
	session_start();
	
	if(isset($_POST['prenom'])){
		$_SESSION['prenom'] = $_POST['prenom'];
		echo $_POST['prenom'];
	}
	
	if(isset($_POST['reset'])){
		unset($_SESSION['prenom']);
	}
	
?>

<html>
	<head>
	</head>
	<body>
		<form method="post">
				<input type="text" name="prenom"/>
				<input type="submit" name="add" value="Ajouter"/>
				<input type="submit" name="reset" value="Reset"/>
		</form>
	</body>
</html>