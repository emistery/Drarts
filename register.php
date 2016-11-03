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

    		<table><form action="register.php" method="post"><font size="3">

 			<?php

          //Behoud gebruikernaam bij fout
          if(empty($_POST)){$gebruikernaam = "";}else{
          $gebruikernaam = $_POST['gebruikernaam'];}

          //Behoud naam bij fout
          if(empty($_POST)){$naam = "";}else{
          $naam = $_POST['naam'];}

          //Behoud adres bij fout
          if(empty($_POST)){$adres = "";}else{
          $adres = $_POST['adres'];}

          //Behoud E-mailadres bij fout
          if(empty($_POST)){$emailadres = "";}else{
          $emailadres = $_POST['emailadres'];}

          //Behoud telefoonnummer bij fout
          if(empty($_POST)){$telefoonnummer = "";}else{
          $telefoonnummer = $_POST['telefoonnummer'];}

          echo "<tr><td>"."Inlognaam: "."</td>
 						<td>"; //Inlognaam veld
 						?><input type="text" name="gebruikernaam" value="<?php echo "$gebruikernaam"; ?>"></td><td>*</td></tr><?php
 					
          echo "<tr><td>"."Wachtwoord: "."</td>
 						<td>"; //Wachtwoord veld
 						?><input type="password" name="wachtwoord"></td><td>*</td></tr><?php
 					
          echo "<tr><td>"."Herhaal wachtwoord:"." "."</td></td>
 						<td>"; //Herhaal wachtwoord veld
 						?><input type="password" name="herhaal_wachtwoord"></td><td>*</td></tr><?php
 					
          echo "<tr><td>"."Naam: <br/>"."</td></td>
 						<td>"; //Naam veld
 						?><input type="text" name="naam" value="<?php echo "$naam"; ?>"></td></tr><?php
 					
          echo "<tr><td>"."Adres: "."</td></td>
 						<td>"; //Adres veld
 						?><input type="text" name="adres" value="<?php echo "$adres"; ?>"></td></tr><?php
 				
        	echo "<tr><td>"."E-mailadres: "."</td></td>
 						<td>"; //E-mail veld
 						?><input type="text" name="emailadres" value="<?php echo "$emailadres"; ?>"></td></tr><?php
 					
          echo "<tr><td>"."Telefoonnummer: "."</td></td>
 						<td>"; //Telefoonnummer veld
 						?><input type="text" name="telefoonnummer" value="<?php echo "$telefoonnummer"; ?>"></td></tr>

        <tr><td>Kunstenaar</td><td><input type="checkbox" name="kunstenaar"></td></tr> <!-- Check veld -->
        

 				<?php

 				echo "</table>";

 				echo "<br/>Alle velden met * zijn verplicht!";
 				?></font>

 			<br/><input type="submit" name="submit" value="Account maken">
 			</form>

      <font size="3" color="red">
      <?php

        //Checkt of velden zijn ingevoerd
        if(empty($_POST)){
          echo "<br/>Vul de velden in.";
          }else{

          //Checkt invoer van gebruikernaam
          if(empty($_POST['gebruikernaam'])){
            echo "<br/>Vul een inlognaam in.";
          }else{
            $user = $_POST['gebruikernaam'];
          }

          //Checkt invoer van wachtwoord
          if(empty($_POST['wachtwoord'])){
            echo "<br/>Vul een wachtwoord in.";
          }else{
            $passwd = $_POST['wachtwoord'];
          
            if(empty($_POST)){}elseif
              ($_POST['wachtwoord'] === $_POST['herhaal_wachtwoord']){
              echo "<br/>";
              //connect to sql
            }else{
              $rePasswd = $_POST['wachtwoord'];
              echo "<br/>Wachtwoord klopt niet";
            }
          }
        }
      ?>
      </font>

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