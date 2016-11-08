<?php
include 'sql_connect.php';

$username = $_SESSION['username'];
$newpassword = $_POST['newpassword'];


updatePass($username, $db, $newpassword);
header("Location: account.php");

?>