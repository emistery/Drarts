<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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

<!-- The background of the page. -->
  <style>
    body {
     background-image: url(Achtergrond/achtergrond1.jpg);
    }
  </style>

  <body>
  <!-- HEADER-->
    <?php include 'header.php' ?>
    <!-- /HEADER-->


      <!-- NAVBAR-->
<?php 
include 'navbar.php';
 ?>

      <!-- /NAVBAR-->

      <!-- BODY-->

<?php //echo artikelQuery($db)[6][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])]; ?>
 <div class="row">
   <div class="col-md-4">
   </div>
  <div class="col-md-4" >
    <a href="product.php?name=<?php echo artikelQuery($db)[0][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])]; ?>" class="thumbnail">
    <!-- Product with highest value in stock is placed on home page with according name, price and image-->
      <p>  <?php echo artikelQuery($db)[1][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])] ?> </p>
      <img src="<?php echo artikelQuery($db)[6][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])] ?>" alt="kunst1" style="width:100%;height:100%">
      <br>
    </a>
  </div>
  <div class="col-md-4">
  
  </div>
  </div>
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    Bekijk nu dit werk van
    <?php
      $artist = artikelQuery($db)[7][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])];
      echo artikelKunstenaarQuery($db, $artist);
    ?>
     voor een prijs van maar liefst &euro;<?php echo artikelQuery($db)[2][array_search(max(artikelQuery($db)[3]),artikelQuery($db)[3])]; ?>
    !
    </div>

  </div>




      <!-- /BODY-->

      <!-- NAV -->

<?php include 'footer.php' ?>
      <!-- /NAV -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>