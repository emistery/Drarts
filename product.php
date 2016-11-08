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

<!-- Use the following code to summon information about the product from the database:	<?php $ID = $_GET['name'];echo productPage($db, $ID)[1]; ?>-->

    <div class="row">
    	<div class="col-md-2">
    	</div>
    	<div class="col-md-4">
    		<h1><?php $ID = $_GET['name']; echo productPage($db, $ID)[1]; ?></h1>
    	</div>
    </div	>
	<div class="row">
		<div class="col-md-1">
		</div>
  		<div class="col-md-5">	<!-- De naam van het plaatje wordt opgeroepen uit de database -->
    		<a href="<?php echo productPage($db, $ID)[6]; ?>" class="thumbnail" img src="<?php echo productPage($db, $ID)[6]; ?>" alt="<?php echo productPage($db, $ID)[1]; ?>">
    			<img src="<?php echo productPage($db, $ID)[6]; ?>" style="height:100%; width:100%">
    		</a>
    	</div>
    	<div class="col-md-2">
    	</div>
    	<div class="col-md-3">
			<div> 
			<!--The following form is a mess to look at, because HTML treats whitespace between tags as actual space -->

				<pre>
					<form action="/Drarts/shopping_cart.php" method="POST">Prijs:		€<?php
					$ID = $_GET['name']; echo productPage($db, $ID)[2]; ?>		<img src="shoppingcart.png" style="height:75px; width:75px"><br><br><?php include 'price_total.php' ?><input type="submit" value="In winkelwagentje">

				<pre>	<!-- The information in this form is sent to the shopping_cart.php page -->
					<form action="/Drarts/shopping_cart.php" method="post">Prijs:		€<?php echo productPage($db, $ID)[2]; ?>		<img src="shoppingcart.png" style="height:75px; width:75px"><br><br><?php include 'price_total.php' ?><input type="submit" value="In winkelwagentje">

					<input type="hidden" name="ID" <?php echo "value=" . $_GET['name'] ?> >
    				</form>	<!-- The hidden input field is used to send the product_ID to the shopping cart -->
    			</pre>
    		</div>
    	</div>
    </div>
    <br>
    <br>
    <div class="row">
    	<div class="col-md-1">
    	</div>
    	<div class="col-md-6">	<!-- The description hould be here, for now there is only placeholder text -->
    		<?php echo productPage($db, $ID)[1]; ?>
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