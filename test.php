<!DOCTYPE html>
	<head>
	</head>
	<body>
	</body>

<table><from action="register.php">

 			<?php

 					echo "<tr><td>"."Inlognaam: "."</td>
 						<td>"; //Inlognaam veld
 						?><input type="text" name="gebruikernaam"></td><td>*</td></tr><?php
 					echo "<tr><td>"."Wachtwoord: "."</td>
 						<td>"; //Wachtwoord veld
 						?><input type="password" name="wachtwoord"></td><td>*</td></tr><?php
 					echo "<tr><td>"."Herhaal wachtwoord:"." "."</td></td>
 						<td>"; //Herhaal wachtwoord veld
 						?><input type="password" name="herhaal_wachtwoord"></td><td>*</td></tr><?php
 					echo "<tr><td>"."Naam: <br/>"."</td></td>
 						<td>"; //Naam veld
 						?><input type="text" name="naam"></td></tr><?php
 					echo "<tr><td>"."Adres: "."</td></td>
 						<td>"; //Adres veld
 						?><input type="text" name="adres"></td></tr><?php
 					echo "<tr><td>"."E-mailadres: "."</td></td>
 						<td>"; //E-mail veld
 						?><input type="text" name="emailadres"></td></tr><?php
 					echo "<tr><td>"."Telefoonnummer: "."</td></td>
 						<td>"; //Telefoonnummer veld
 						?><input type="text" name="telefoonnummer"></td></tr><?

 				
 				
 				<?php

 				echo "</form></table>";

 				echo "<br/>Alle velden met * zijn verplicht!";

 			?>

 			<br/><input type="submit" value="Account maken">

 			<!-- Test -->
 			<br/><br/><br/>

 			<?php
 				if(empty($_POST)){
 					echo "POST is empty";
 				}else{
 					print_r($_POST);
 				}
 			?>