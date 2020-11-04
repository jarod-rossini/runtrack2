<?php
	$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';
	$voyelle = ['a','e','i','o','u','y'];
	
	$table[] = explode(" ",$str);

	$str = implode("",$table[0]);
	
	$a = 0;
	
	while($a<strlen($str)){
		for($i = 0; $i<6; $i++){
			$nb = strtolower(substr($str, $a, 1));
			if($voyelle[$i] == $nb){ echo $nb.' ';}
			else{echo '';}
		}
		$a++;
	}	
?>