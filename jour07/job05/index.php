<?php
	session_start();
	
	if(empty($_POST)){
		$_SESSION['turn'] = 0;
	}
	
	if(isset($_POST['reset'])){
		session_destroy();
		header('location:index.php');
	}
	
	if(!isset($_SESSION['value'])){
		$_SESSION['value'] = '---------';
	}
	else{
		$position=0;
		foreach($_POST as $key=>$value){
			$position=$key;
		}
		
		if($_SESSION['turn']%2 == 0){
			$_SESSION['value'][$position] = 'X';
		}
		else{$_SESSION['value'][$position] = 'O';}
		
		if(($_SESSION['value'][0] == 'X' && $_SESSION['value'][1] == 'X' && $_SESSION['value'][2] == 'X') ||
			($_SESSION['value'][3] == 'X' && $_SESSION['value'][4] == 'X' && $_SESSION['value'][5] == 'X') ||
			($_SESSION['value'][6] == 'X' && $_SESSION['value'][7] == 'X' && $_SESSION['value'][8] == 'X') ||
			($_SESSION['value'][0] == 'X' && $_SESSION['value'][3] == 'X' && $_SESSION['value'][6] == 'X') ||
			($_SESSION['value'][1] == 'X' && $_SESSION['value'][4] == 'X' && $_SESSION['value'][7] == 'X') ||
			($_SESSION['value'][2] == 'X' && $_SESSION['value'][5] == 'X' && $_SESSION['value'][8] == 'X')){
				
			echo 'Le joueur 1 à gagné';
		}
		elseif(($_SESSION['value'][0] == 'O' && $_SESSION['value'][1] == 'O' && $_SESSION['value'][2] == 'O') ||
			($_SESSION['value'][3] == 'O' && $_SESSION['value'][4] == 'O' && $_SESSION['value'][5] == 'O') ||
			($_SESSION['value'][6] == 'O' && $_SESSION['value'][7] == 'O' && $_SESSION['value'][8] == 'O') ||
			($_SESSION['value'][0] == 'O' && $_SESSION['value'][3] == 'O' && $_SESSION['value'][6] == 'O') ||
			($_SESSION['value'][1] == 'O' && $_SESSION['value'][4] == 'O' && $_SESSION['value'][7] == 'O') ||
			($_SESSION['value'][2] == 'O' && $_SESSION['value'][5] == 'O' && $_SESSION['value'][8] == 'O')){
		
			echo 'Le joueur 2 à gagné';
		}
		
		elseif($_SESSION['turn'] == 8){
			echo 'Match nul';
		}
		
		$_SESSION['turn']++;
	}
	
?>

<body>
<form method="post">
	<table>
		<?php
			for($i = 0; isset($_SESSION['value'][$i]); $i++){
				if(($i == 0) || ($i == 3) || ($i == 6)){
					echo '<tr>';
				}
				echo '<td><input type=\'submit\' name='.$i.' value='.$_SESSION['value'][$i].' id=\'0\'></td>';

				if(($i == 2) || ($i == 5) || ($i == 8)){
					echo '</tr>';
				}
			}
		?>
	</table>
	<br><input type="submit" name="reset" value="Réinitialiser la partie"/>
</form>
</body>

<style>body{display: flex; justify-content: center; align-items: center;}
		td{border: solid 1px black;}</style>

