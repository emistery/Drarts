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
 <?php

$username = $_SESSION['username'];
//0 = username
//1 = leverancier (true = 1)
//2 = password
//3 = email
//4 = name
//5 = address
//6 = postal code
//7 = city

 ?>
 <div class="col-md-8">
<ul class="list-group">
  <li class="list-group-item">Uw gebruikersnaam = <?php echo accountQuery($db, $username)[0] ?></li>
  <li class="list-group-item">Leverancier? </li>
  <li class="list-group-item">Pas uw wachtwoord aan: 
  <form action="update.php" method="POST">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Nieuw wachtwoord" name="newpassword" aria-describedby="basic-addon1">
</div>
<button type="submit"class="btn btn-primary">Versturen</button>
</form>
   </li>
  <li class="list-group-item">Uw email = <?php echo accountQuery($db, $username)[3] ?></li>
  <li class="list-group-item">Uw naam = <?php echo accountQuery($db, $username)[4] ?></li>
  <li class="list-group-item">Uw adres = <?php echo accountQuery($db, $username)[5] ?></li>
  <li class="list-group-item">Uw postcode = <?php echo accountQuery($db, $username)[6] ?></li>
  <li class="list-group-item">Uw woonplaats = <?php echo accountQuery($db, $username)[7] ?></li>
</ul>
</div>


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