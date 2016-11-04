<?php
function checkUsername($db, $gebruikersnaam){
	$query = "SELECT gebruikersnaam
			  FROM Klant
			  WHERE gebruikersnaam = $gebruikersnaam";
	mysqli_query($db, $query) or die('Error querying database.');
	
?>