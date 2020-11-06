<?php
	$select = $_POST['fonction'];
	$str = $_POST['str'];
	$decalage = $_POST['decalage'];

	function gras($str){
		$table = explode(' ', $str);
		
		for($i = 0; $i<sizeof($table); $i++){
			$comp = $table[$i];
			$comp1 = substr($comp, 0, 1);
			
			$table[$i] = $comp;
			
			if(ctype_upper($comp1)){ $table[$i] = '<b>'.$comp.'</b>';}
		}
		$str = implode(' ', $table);
		echo $str;
	}
	
	function cesar($str, $decalage){
		$b = 0;
		$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l',
						'm','n','o','p','q','r','s','t','u','v','w','x','y','z');
		
		for($a = 0; $a<strlen($str); $a++){
			$nb = substr($str, $a, 1);
			$table[$a] = $nb;
		}
		
		while($b<sizeof($table)){
			for($c = 0; $c<sizeof($alphabet); $c++){
				$comp = strtolower($table[$b]);
				
				if($comp == $alphabet[$c] && $c + $decalage < 26){$table[$b] = $alphabet[$c+$decalage]; break;}
			}
			$b++;
		}
		$str = implode('', $table);
		echo '<br>'.$str;
	}
	
	function plateforme($str){
		$fin = 'me';
		
		$table = explode(' ', $str);
		
		for($i = 0; $i<sizeof($table); $i++){
			$fin1 = $table[$i];
			$fin2 = substr($fin1, -2, 2);
			
			if($fin2 == $fin){$table[$i] = $table[$i].'_';}
			
		}
		$str = implode(' ', $table);
		echo '<br>'.$str;
	}
	
	if(isset($_POST['fonction'])){
		$select = $_POST['fonction'];
		switch($select){
			case '1': gras($str);
				break;
			case '2': cesar($str, $decalage);
				break;
			case '3': plateforme($str);
				break;
		}
	}
?>