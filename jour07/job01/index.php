<?php
	session_start();
	
	$_SESSION['id'] = 0;
	$nb_visites = $_SESSION['id'];
	
	foreach($_SESSION as $key => $value){
		$nb_visites++;
	}
	
	if(isset($_POST['reset'])){
		session_destroy(); 
		$nb_visites = 0;
		echo $nb_visites;
	}
	else{echo $nb_visites;}
?>

<html>
	<head>
	</head>
	<body>
		<form method="post">
				<input type="submit" name="reset" value="reset"/>
		</form>
	</body>
</html>