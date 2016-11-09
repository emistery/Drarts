<?php
// this file is a test, not used anymore
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
//$query = "SELECT * FROM artikel";
//mysqli_query($db, $query) or die('Error querying database.');

//$result = mysqli_query($db, $query);
//$row = mysqli_fetch_array($result);
//while($row = mysqli_fetch_assoc($result)){
//	echo $row['ID'] . ' ' . $row['beschrijving'] . ' ' . $row['prijs'] . ' ' . $row['voorraad_aantal'] . ' ' . $row['aantal_exemplaren'] . ' ' . $row['voorraad_minimum_aantal'] .  "<br>";
//}

?>