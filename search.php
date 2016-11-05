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
    <?php include 'header.php'; ?>
    <!-- /HEADER-->


    	<!-- NAVBAR-->
<?php include 'navbar.php' ?>

    	<!-- /NAVBAR-->

    	<!-- BODY-->
<div class="row">
 <div class="col-md-4">
 </div>
 <div class="col-md-4">
<?php

$search = $_GET['search'];
//print_r(count(searchQuery($db, "%" . $search . "%")[0]));
for ($i=0; $i < count(searchQuery($db, "%" . $search . "%")[0]); $i++) { 
  $name = searchQuery($db, "%" . $search . "%")[1][$i];
  $prijs = searchQuery($db, "%" . $search . "%")[2][$i];
  $artist = artikelKunstenaarQuery($db, searchQuery($db, "%" . $search . "%")[7][$i]);
  echo $name . " " . "van" . " " . $artist . " " . "voor" . " " . "&euro;" .  $prijs;
  $image = searchQuery($db, "%" . $search . "%")[6][$i];
  echo "<a href=" . $image . " " . "class=thumbnail>" . "<img src=" . $image . ">" . "</a>";
 // echo "<a href=" . searchQuery($db, "%" . $search . "%")[6][$i] . "class=thumbnail" . "<img src=kunst1.jpg>" . "</a>";
}
?>

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
<?php
//echo "<a href=kunst1.jpg class=thumbnail>" . "<img src=kunst1.jpg>" . "</a>";
//echo "<p>" . $names . "</p>";
//echo "<br>" . "<br>";



//foreach(searchQuery($db, "%" . $search . "%")[6] as $image){
//    echo "<a href=$image class=thumbnail>" . "<img src=$image>" . "</a>";
//}
?>