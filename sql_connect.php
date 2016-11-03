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
	$row = mysqli_fetch_array($result);
//	while($row = mysqli_fetch_assoc($result)){
	//	echo $row['ID'] . ' ' . $row['beschrijving'] . ' ' . $row['prijs'] . ' ' . $row['voorraad_aantal'] . ' ' . $row['aantal_exemplaren'] . ' ' . $row['voorraad_minimum_aantal']  . ' ' . $row['afbeelding'] .  "<br>";
//}
	$start = 0;
	while($row = mysqli_fetch_assoc($result)){
		$ID[$start] = $row['ID'];
		$beschrijving[$start] = $row['beschrijving'];
		$prijs[$start] = $row['prijs'];
		$voorraad_aantal[$start] = $row['voorraad_aantal'];
		$aantal_exemplaren[$start] = $row['aantal_exemplaren'];
		$voorraad_minimum_aantal[$start] = $row['voorraad_minimum_aantal'];
		$afbeelding[$start] = $row['afbeelding'];
		$start++;
	}
	$artikeldata = array($ID, $beschrijving, $prijs, $voorraad_aantal, $aantal_exemplaren, $voorraad_minimum_aantal, $afbeelding);
	return $artikeldata;
}
// Example to query table
// echo artikelQuery($db)[0][0];



?>