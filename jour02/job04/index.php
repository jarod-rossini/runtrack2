<?php
	$str1 = 'Fizz';
	$str2 = 'Buzz';
	
	for($i = 0; $i<101; $i++){
		if(is_int($i/3) && is_int($i/5)){echo $str1.$str2.'<br>';}
		elseif(is_int($i/3)){echo $str1.'<br>';}
		elseif(is_int($i/5)){echo $str2.'<br>';}
		else{echo $i.'<br>';}
	}

?>