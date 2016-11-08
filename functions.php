<?php
function checkUsername($db, $gebruikersnaam, $wachtwoord, $naam, $adres, $postcode, $woonplaats, $emailadres, $leverancier){
	$query = 	"INSERT INTO Klant
				VALUES ('$gebruikersnaam', '$wachtwoord', '$naam', '$adres', '$postcode', '$woonplaats', '$emailadres', '$leverancier')";

	mysqli_query($db, $query) or die('Inlognaam bestaat al');}
	
?>