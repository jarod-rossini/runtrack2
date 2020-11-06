<?php
	function calcule($a, $operation, $b){
		switch($operation){
			case '+': echo $a + $b;
				break;
			case '-': echo $a - $b;
				break;
			case '*': echo $a * $b;
				break;
			case '/': echo $a / $b;
				break;
			case '%': echo $a % $b;
				break;
		}
	}
?>