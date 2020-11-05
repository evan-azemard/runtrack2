<?php


	$number = array (200, 204, 173, 98, 171, 404, 459);

	$index = 0;

	while ($index < 7) {
	
		if ($number[$index] %2 === 0 ){
			echo ($number[$index] . " est paire <br/>");
		} else {
			echo ($number[$index] . " est impaire <br/>");
		}

		$index++;
	}
	 

?>