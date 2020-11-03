
	<?php
	
		$int = "Bonjour";
		$chaine = "LeFeux";
		$numberflo = 0.5;
		$ok = True;
	?>

	<html>
    <h1>Data types on PHP</h1>
    <table border="1">
    <theader>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </theader>
    <tr>
        <td>String</td>
        <td>$chaine</td>
        <td><?php echo($chaine);?></td>
    </tr>
    <tr>
        <td>Integer</td>
        <td>$int</td>
        <td><?php echo($int);?></td>
    </tr>
    <tr>
        <td>Boolean</td>
        <td>$ok</td>
        <td><?php echo($ok);?></td>
    </tr>
    <tr>
        <td>Float</td>
        <td>$numberflo</td>
        <td><?php echo($numberflo);?></td>
    </tr>
    <table>