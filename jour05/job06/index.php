<?php
	function leetspeak($str){
		$table = array();
		
		for($i = 0; $i<strlen($str); $i++){
			$comp = strtolower(substr($str, $i, 1));
			
			$table[$i] = $comp;
			
			switch($table[$i]){
				case 'a': $table[$i] = 4;
					break;
				case 'b': $table[$i] = 8;
					break;
				case 'e': $table[$i] = 3;
					break;
				case 'g': $table[$i] = 6;
					break;
				case 'l': $table[$i] = 1;
					break;
				case 's': $table[$i] = 5;
					break;
				case 't': $table[$i] = 7;
					break;
			}
		}
		
		$str = implode('', $table);
		echo $str;
	}
?>