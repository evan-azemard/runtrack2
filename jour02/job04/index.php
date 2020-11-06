
<?php

	$i = 1;

	while ($i < 101) {


		if ($i %3 === 0 and $i %5 !== 0){
			echo "Fizz";
			echo "<br/>";
		}

		elseif ($i %5 === 0 and $i %3 !== 0){
			echo "Buzz";
			echo "<br/>";
		}

		elseif ($i %3 === 0 and $i %5 === 0){
			echo "FizzBuzz";
			echo "<br/>";
		}

		else{
			echo $i;
			echo "<br/>";
		}
		$i = $i + 1;
	} 




?>