<?php
	function occurrences($str, $char){
		$occ = 0;
		
		for($i = 0; $i<strlen($str); $i++){
			$comp = substr($str, $i, 1);
			if($char == $comp){$occ++;}
		}
		echo $occ;
	}
?>