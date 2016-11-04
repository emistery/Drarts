<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webdev";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
  die("The connection is not successful: " .
    mysqli_connect_error() . 
      " (" . mysqli_connect_errno() . ")"

    );
}
//function to query the artikel table
function artikelQuery($db){
	$query = "SELECT * FROM artikel";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);
	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$ID[$start] = $row['ID'];
		$beschrijving[$start] = $row['beschrijving'];
		$prijs[$start] = $row['prijs'];
		$voorraad_aantal[$start] = $row['voorraad_aantal'];
		$aantal_exemplaren[$start] = $row['aantal_exemplaren'];
		$voorraad_minimum_aantal[$start] = $row['voorraad_minimum_aantal'];
		$afbeelding[$start] = $row['afbeelding'];
		$Kunstenaar_ID[$start] = $row['Kunstenaar_ID'];
		$start++;
	}
	$artikeldata = array($ID, $beschrijving, $prijs, $voorraad_aantal, $aantal_exemplaren, $voorraad_minimum_aantal, $afbeelding, $Kunstenaar_ID);
	return $artikeldata;
}
// Example to query table
//echo artikelQuery($db)[0][0];

//$key =  key(max(artikelQuery($db)[3]));
//echo $key;
//echo key(max(artikelQuery($db)));
//$maxs = array_keys(artikelQuery($db)[3], max(artikelQuery($db)[3]));
//echo $maxs;
//print_r(artikelQuery($db)[3]);



//$returnThis = array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3]);
//command to query highest value in stock & combine a corresponding column given as the first integer
//echo artikelQuery($db)[6][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])];


//function to query the inkoop_order table
function inkoopOrderQuery($db){
	$query = "SELECT * FROM inkoop_order";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$ID[$start] = $row['ID'];
		$aantal_besteld[$start] = $row['aantal_besteld'];
		$aantal_geleverd[$start] = $row['aantal_geleverd'];
		$totaalprijs[$start] = $row['totaalprijs'];
		$besteldatum[$start] = $row['besteldatum'];
		$leverdatum[$start] = $row['leverdatum'];
		$Leverancier_gebruikersnaam[$start] = $row['Leverancier_gebruikersnaam'];
		$start++;
	}
	$inkoopOrderData = array($ID, $aantal_besteld, $aantal_geleverd, $totaalprijs, $besteldatum, $leverdatum, $Leverancier_gebruikersnaam);
	return $inkoopOrderData;
}
//echo inkoopOrderQuery($db)[0][2];

//function to query the ink_or_reg table
function inkoopOrderRegelQuery($db){
	$query = "SELECT * FROM ink_or_reg";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$aantal[$start] = $row['aantal'];
		$prijs_artikel[$start] = $row['aantal_x_prijs_artikel'];
		$Artikel_ID[$start] = $row['Artikel_ID'];
		$Inkoop_order_ID[$start] = $row['Inkoop_order_ID'];
		$aantal_x_prijs_artikel[$start] = $row['prijs_artikel'];
		$start++;
	}
	$inkoopOrderRegelData = array($aantal, $prijs_artikel, $Artikel_ID, $Inkoop_order_ID, $aantal_x_prijs_artikel);
	return $inkoopOrderRegelData;
}

//echo inkoopOrderRegelQuery($db)[0][2];

//function to query the klant table
function klantQuery($db){
	$query = "SELECT * FROM klant";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$gebruikersnaam[$start] = $row['gebruikersnaam'];
		$wachtwoord[$start] = $row['wachtwoord'];
		$emailadres[$start] = $row['emailadres'];
		$naam[$start] = $row['naam'];
		$adres[$start] = $row['adres'];
		$postcode[$start] = $row['postcode'];
		$woonplaats[$start] = $row['woonplaats'];
		$start++;
	}
	$klantData = array($gebruikersnaam, $wachtwoord, $emailadres, $naam, $adres, $postcode, $woonplaats);
	return $klantData;
}
//echo klantQuery($db)[1][2];

function kunstenaarQuery($db){
	$query = "SELECT * FROM kunstenaar";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$ID[$start] = $row['ID'];
		$naam[$start] = $row['naam'];
		$start++;
	}
	$kunstenaarData= array($ID, $naam);
	return $kunstenaarData;
}
//echo kunstenaarQuery($db)[1][1];

//function to query the leverancier table
function leverancierQuery($db){
	$query = "SELECT * FROM leverancier";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$gebruikersnaam[$start] = $row['gebruikersnaam'];
		$wachtwoord[$start] = $row['wachtwoord'];
		$emailadres[$start] = $row['emailadres'];
		$naam[$start] = $row['naam'];
		$adres[$start] = $row['adres'];
		$postcode[$start] = $row['postcode'];
		$woonplaats[$start] = $row['woonplaats'];
		$start++;
	}
	$leverancierData = array($gebruikersnaam, $wachtwoord, $emailadres, $naam, $adres, $postcode, $woonplaats);
	return $leverancierData;
}
//echo leverancierQuery($db)[1][2];

//function to query the verkoop_order table
function verkoopOrderQuery($db){
	$query = "SELECT * FROM verkoop_order";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$ID[$start] = $row['ID'];
		$totaalprijs[$start] = $row['totaalprijs'];
		$besteldatum[$start] = $row['besteldatum'];
		$leverdatum[$start] = $row['leverdatum'];
		$Klant_gebruikersnaam[$start] = $row['Klant_gebruikersnaam'];
		$start++;
	}
	$inkoopOrderRegelData = array($ID, $totaalprijs, $besteldatum, $leverdatum, $Klant_gebruikersnaam);
	return $inkoopOrderRegelData;
}
//echo verkoopOrderQuery($db)[1][2];

//function to query the ver_or_reg table
function verkoopOrderRegelQuery($db){
	$query = "SELECT * FROM ver_or_reg";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);

	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$aantal[$start] = $row['aantal'];
		$prijs_artikel[$start] = $row['prijs_artikel'];
		$Verkoop_order_ID[$start] = $row['Verkoop_order_ID'];
		$Artikel_ID[$start] = $row['Artikel_ID'];
		$aantal_x_prijs_artikel[$start] = $row['aantal_x_prijs_artikel'];
		$start++;
	}
	$verkoopOrderRegelData = array($aantal, $prijs_artikel, $Verkoop_order_ID, $Artikel_ID, $aantal_x_prijs_artikel);
	return $verkoopOrderRegelData;
}
//echo verkoopOrderRegelQuery($db)[1][2];

function artikelKunstenaarQuery($db, $artist){
	$query = "SELECT naam FROM kunstenaar WHERE ID = $artist ";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);
	while($row = mysqli_fetch_assoc($result)){
		$naam = $row['naam'];
	}
	$artikelKunstenaarData = $naam;
	return $artikelKunstenaarData;
}
//echo artikelKunstenaarQuery($db, $artist);

//function to query a search
function searchQuery($db, $search){
	$query = "SELECT * FROM artikel WHERE beschrijving like '$search' ";
	mysqli_query($db, $query) or die('Error querying database.' . mysqli_error($db));
	$result = mysqli_query($db, $query);
//	$row = mysqli_fetch_array($result);
	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$ID[$start] = $row['ID'];
		$beschrijving[$start] = $row['beschrijving'];
		$prijs[$start] = $row['prijs'];
		$voorraad_aantal[$start] = $row['voorraad_aantal'];
		$aantal_exemplaren[$start] = $row['aantal_exemplaren'];
		$voorraad_minimum_aantal[$start] = $row['voorraad_minimum_aantal'];
		$afbeelding[$start] = $row['afbeelding'];
		$Kunstenaar_ID[$start] = $row['Kunstenaar_ID'];
		$start++;
	}
	$searchdata = array($ID, $beschrijving, $prijs, $voorraad_aantal, $aantal_exemplaren, $voorraad_minimum_aantal, $afbeelding, $Kunstenaar_ID);
	return $searchdata;
}
$search = "Schilderij";
// code to query a certain product based on search result ($search). first integer is column, 2nd is the number of the search result
//print_r(searchQuery($db, "%" . "Schilderij" . "%")[1]);
//echo searchQuery($db, "%" . $search . "%")[1][1];

?>