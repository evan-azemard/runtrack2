

<?php

	$i = 0;

	while ($i < 101) {

		if ($i > 0 and $i < 20) {
			echo ("<i>$i</i>");
			echo "<br/>";
		} 

		else if  ($i > 25 and $i < 50) {

			if ($i == 42) {

				echo ("La Plateforme_");
				echo "<br/>";
		}
		else{
			echo ("<u>$i</u>");
			echo "<br/>";
		}
		}

		else{
			echo $i;
			echo "<br/>";

		}
		$i = $i + 1;

	}


?>