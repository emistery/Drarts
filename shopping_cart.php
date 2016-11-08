<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shopping Cart</title>

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

<!-- Shopping Cart table -->

<div class="col-md-1"></div>
<div class="col-md-10">
  <div class="panel panel-default">
    <div class="panel-heading"><img src="shoppingcart.png" style="width:50px;height:50px"></div>
    <table class="table">
      <tr>
      <th>Afbeelding</th>
      <th>
      </th>
      <th>Aantal</th>
      <th>Prijs</th>
      </tr>
      <?php

      if (!isset($_SESSION['winkelwagen'][0])) {
        $_SESSION['winkelwagen'][0] = 0;
      }else{
           for ($i=0; $i <= max(array_keys($_SESSION['winkelwagen'])); $i++) { 
          $_SESSION['winkelwagen'][$i] = $_POST['ID'];
          
          //echo $_SESSION['winkelwagen'][$i];
          print_r(max(array_keys($_SESSION['winkelwagen'])));
          echo $_SESSION['winkelwagen'][$i];
        }
        }
  
      
//echo $_SESSION['winkelwagen'][0];
//echo $_SESSION['winkelwagen'][1];
//print_r($_SESSION['winkelwagen']);
      
      ?>
      <tr>
      <td><a href="Kunst/Schilder/dali1.png"><img src="Kunst/Schilder/dali1.png" class="thumbnail" alt="dali1" style="width:50px;height:50px"></a></td>
      <td>De Volharding der Herinnering <br/> (poster)</td>
      <td>1</td>
      <td>€15,-</td>
      </tr>

   
    </table>
    <div class="panel-footer pull-right">Totaal: €15,-</div>
    </div>

<br/>
<br/>
<br/>

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