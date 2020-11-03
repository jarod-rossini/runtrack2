<?php
	$nb = 1;

	while ($nb < 1001) {
		if($nb == 1){
			$nb++;
			continue;
		}
		
		$a = 0;
		
		for ($i = 2; $i<$nb; $i++){
			if(is_int($nb/$i)){
				$a++;
				break;
			}
		}
		
		if ($a == 0){echo $nb.'<br>';}
		
		$nb++;
	}
?>