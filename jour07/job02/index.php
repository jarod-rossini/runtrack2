<?php
	$_COOKIE['nb'] = 0;
	$nbvisites = $_COOKIE['nb'];
	
	foreach($_COOKIE as $key => $value){
		$nbvisites++;
	}
	
	if(isset($_POST['reset'])){
		$nbvisites = 0;
		echo $nbvisites.'<br>';
	}
	else{echo $nbvisites.'<br>';}
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