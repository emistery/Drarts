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

    		<table><form class="form-horizontal" action="register.php" method="post"><font size="3">

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

          //Behoud postcode bij fout
          if(empty($_POST)){$postcode = "";}else{
          $postcode = $_POST['postcode'];}

          //Behoud woonplaats bij fout
          if(empty($_POST)){$woonplaats = "";}else{
          $woonplaats = $_POST['woonplaats'];}

          //Behoud E-mailadres bij fout
          if(empty($_POST)){$emailadres = "";}else{
          $emailadres = $_POST['emailadres'];}

          echo "<tr><td>"."Inlognaam: "."</td>
 						<td>"; //Inlognaam veld
 						?><input type="text" name="gebruikernaam" value="<?php echo "$gebruikernaam"; ?>" class="form-control"></td><td>*</td></tr><?php
 					
          echo "<tr><td>"."Wachtwoord: "."</td>
 						<td>"; //Wachtwoord veld
 						?><input type="password" name="wachtwoord" class="form-control"></td><td>*</td></tr><?php
 					
          echo "<tr><td>"."Herhaal wachtwoord:"." "."</td></td>
 						<td>"; //Herhaal wachtwoord veld
 						?><input type="password" name="herhaal_wachtwoord" class="form-control"></td><td>*</td></tr><?php
 					
          echo "<tr><td>"."Naam: <br/>"."</td></td>
 						<td>"; //Naam veld
 						?><input type="text" name="naam" value="<?php echo "$naam"; ?>" class="form-control"></td></tr><?php
 					
          echo "<tr><td>"."Adres: "."</td></td>
 						<td>"; //Adres veld
 						?><input type="text" name="adres" value="<?php echo "$adres"; ?>" class="form-control"></td></tr><?php

          echo "<tr><td>"."Postcode: "."</td></td>
            <td>"; //Postcode veld
            ?><input type="text" name="postcode" value="<?php echo "$postcode"; ?>" class="form-control"></td></tr><?php

          echo "<tr><td>"."Woonplaats: "."</td></td>
            <td>"; //Woonplaats veld
            ?><input type="text" name="woonplaats" value="<?php echo "$woonplaats"; ?>" class="form-control"></td></tr><?php
 				
        	echo "<tr><td>"."E-mailadres: "."</td></td>
 						<td>"; //E-mail veld
 						?><input type="text" name="emailadres" value="<?php echo "$emailadres"; ?>" class="form-control"></td></tr>

        <tr><td>Leverancier</td><td><input type="checkbox" name="leverancier"></td></tr> <!-- Check veld -->
        

 				<?php

 				echo "</table>";

 				echo "<br/>Alle velden met * zijn verplicht!";
 				?></font>

 			<br/><input type="submit" name="submit" value="Account maken" class="btn btn-primary">
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
              //Check lverancier

                if(array_key_exists('leverancier', $_POST)){
                  // Leverancier staat aan
                  include 'functions.php';
                  (checkUsername($db, $_POST['gebruikernaam'], $_POST['wachtwoord'], $_POST['naam'], $_POST['adres'], $_POST['postcode'], $_POST['woonplaats'], $_POST['emailadres'], 1));

                  mysqli_close($db);

                }else{
                  //Leverancier staat uit
                }


            }else{
              $rePasswd = $_POST['wachtwoord'];
              echo "<br/>Herhaald wachtwoord komt niet overeen met het ingevoerde wachtwoord";
            }
          }
        }
      
      ?>
      </font>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/>

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