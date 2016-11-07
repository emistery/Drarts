<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Product</title>

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
    <div class="row">
    	<div class="col-md-4">
    	</div>
    	<div class="col-md-4">
    		<h1>Productnaam</h1>
    	</div>
    </div	>
	<div class="row">
		<div class="col-md-3"> &nbsp&nbsp
			<div class="btn-group-vertical" role="group" aria-label="Koopkunst">
				<a href="gallery.php" class="btn btn-default" role="button">Galerij</a>
  				<a href="art.php" class="btn btn-default" role="button">Schilder</a>
  				<a href="art2.php" class="btn btn-default" role="button">Beeldend Kunstenaar</a>
			</div>
		</div>
  		<div class="col-md-4">
    		<a href="kunst2.jpg" class="thumbnail" img src="kunst2.jpg" alt="kunst2">
    			<img src="kunst2.jpg" style="height:100%; width:100%">
    		</a>
    	</div>
    	<div class="col-md-1">
    	</div>
    	<div class="col-md-3">
			<div>
				<pre>Prijs:		€artikelprijs &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="shoppingcart.png" style="height:75px; width:75px"><br><br><br>aantal: 	<input type="number" name="quantity" min="1" max="100" value="1"><br><br><br>Totaal:		€totaalprijs
				<br><br><input type="button" name="addtocart" value="voeg toe aan winkewagentje"><br><br><br><input type="button" name="tocart" value="Naar winkelwagentje">
    			</pre>
    		</div>
    	</div>
    </div>
    <br>
    <br>
    <div class="row">
    	<div class="col-md-3">
    	</div>
    	<div class="col-md-6">
    		PRODUCTNAAM
    		<div class="boxed">
    			<?php include 'Loremipsum.php' ?>
    		</div>
    	</div>
    </div>
    <br>
    <br>
    <br>
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