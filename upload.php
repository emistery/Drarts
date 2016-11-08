<?php
include 'sql_connect.php';
$ID = $_POST['PID'];
$beschrijving = $_POST['beschrijving'];
$prijs = $_POST['prijs'];
$aID = $_POST['artistID'];
$image = $_POST['image'];

newProduct($db, $ID, $beschrijving, $prijs, $image, $aID);

header('Location: ./account.php');

?>
