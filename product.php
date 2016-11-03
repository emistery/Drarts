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
    <h1><center>Productnaam</center></h1>

	<div class="row">
  		<div class="col-md-6">
    		<div id="kunst" class="carousel slide" data-ride="carousel">
    			<div class="carousel-inner">
    				<div class="item active">
    					<img src="kunst2.jpg" alt="kunst2" style="width:500px; height:500px">
    				</div>
    				<div class="item">
    					<img src="kunst3.jpg" alt="kunst3" style="width:500px; height:500px">
    				</div>
    				<div class="item">
    					<img src="kunst4.jpg" alt="kunst4" style="width:500px; height:500px">
    				</div>
    			</div>
    			<a class="left carousel-control" href="#kunst" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left"></span>
    			</a>
    			<a class="right carousel-control" href="#kunst" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
    			</a>
    		</div>
    	</div>
    </div>

    		<!--<a href="kunst2.jpg" class="thumbnail">
      		<p>Kunst2</p>
      		<img src="kunst2.jpg" alt="kunst2" style="width:500px; height:500px">
      		<br>
    		</a>-->
		</div>
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