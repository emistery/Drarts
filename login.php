<?php
include 'sql_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

//username & password posted will be checked
$query = "SELECT * FROM klant WHERE gebruikersnaam = '$username' AND wachtwoord = '$password' ";
mysqli_query($db, $query) or die('Error querying database.' . mysqli_error($db));
$result = mysqli_query($db, $query);
   if ($result->num_rows == 1) {	  
 
	  		   //set session
			   $_SESSION['authorized'] = 'TRUE';
 				$_SESSION['username'] = $username;
 				$_SESSION['password'] = $password;
			   // reload the page
			  $_SESSION['success'] = 'Login Successful';
			  header('Location: ./home.php');
			  exit;			
 
 
    } else {
		// login failed save error to a session
		
  		$_SESSION['error'] = 'Verkeerd gebruikersnaam en/of wachtwoord ingevuld, u wordt automatisch naar de hoofdpagina omgeleid';
  		echo $_SESSION['error'];
  		header( "refresh:5;url=home.php" );
   }




?>