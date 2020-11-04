<?php
	$str = 'On n est pas le meilleur quand on le croit mais quand on le sait';
	
	$dic = ['voyelles'=> 0, 'consonnes' => 0];
	$voyelle = array_keys($dic, 'voyelles');
	$voyelles = ['a','e','i','o','u','y'];
	$consonne = array_keys($dic, 'consonnes');
	$consonnes = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z'];
	
	$table[] = explode(" ",$str);
	$str = implode("",$table[0]);
	
	$count = 0;
	$count1 = 0;
	$a = 0;
	
	echo '<style>body{display: flex; justify-content: center; align-items: center;}
					th, td{border: solid 1px black; text-align: center;}</style>';
	echo '<table><thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
	
	while($a<strlen($str)){
		for($i = 0; $i<6; $i++){
			$nb = strtolower(substr($str, $a, 1));
			if($voyelles[$i] == $nb){
				$count++; 
				$dic['voyelles'] = $count;
			}
		}
		
		for($i = 0; $i<20; $i++){
			$nb = strtolower(substr($str, $a, 1));
			if($consonnes[$i] == $nb){ 
				// echo '<td>'.$nb.'</td></tr>'; 
				$count1++; 
				$dic['consonnes'] = $count1;
			}
		}
		
		$a++;
	}
	
	echo '<tr><td>'.$count.'</td>';
	echo '<td>'.$count1.'</td></tr>';
	echo '</table>';
?>