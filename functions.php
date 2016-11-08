<?php
function checkUsername($db, $gebruikersnaam, $wachtwoord, $naam, $adres, $postcode, $woonplaats, $emailadres, $telefoonnummer, $leverancier){
	$query = 	"INSERT INTO Klant
				VALUES ('$gebruikersnaam', '$wachtwoord', '$naam', '$adres', '$postcode', '$woonplaats', '$emailadres', '$telefoonnummer', '$leverancier')";

	mysqli_query($db, $query) or die('Inlognaam bestaat al');}
	
?>