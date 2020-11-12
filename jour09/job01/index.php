<?php
 
$db = mysqli_connect ("localhost", "root", "", "jour08");
$requete = "SELECT * FROM etudiants";
$query = mysqli_query ($db, $requete);
$resultats = mysqli_fetch_all ($query);
$ligne = 0;
/* echo  $requete;
 var_dump ($resultats)*/

?>
<html>
    <table border="1">
    <thead>
        <th>id</th>
        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>
        <th>sexe</th>
        <th>email</th>
    </thead>
    <tbody>
        <?php
         while ($ligne < 7) {
            echo"<tr>";
            $td = 0;
            while ($td < 6) {
            echo "<td>";
            echo $resultats [$ligne][$td];
            echo "</td>";
            $td++;
    } 
         echo "</tr>";
         $ligne++;
    }
        ?>
    </tbody>
    <table>




