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

?>