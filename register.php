<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- HEADER-->
    <?php include 'header.php' ?>
    <!-- /HEADER-->


    	<!-- NAVBAR-->
<?php include 'navbar.php' ?>

    	<!-- /NAVBAR-->

    	<!-- BODY-->

    		<table><from action="register_pass.php" method="get">

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
 						?><input type="text" name="telefoonnummer"></td></tr>

 				<?php

 				echo "</table>";

 				echo "<br/>Alle velden met * zijn verplicht!";
 				?>

 			<br/><input type="submit" name="submit" value="Account maken">
 			</form>

 			<!-- Test -->
 			<br/><br/><br/>

 			<?php
		        if(empty($_POST)){
		          echo "POST is empty";
		        }else{
		          print_r($_POST);
		        }
		    ?>

		<!-- /BODY-->

      <!-- NAV -->

<?php include 'footer.php' ?>
</ul>
      <!-- /NAV -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>