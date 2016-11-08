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

<!-- Shopping Cart table -->
<div class="col-md-1"></div>
<div class="col-md-10">
  <div class="panel panel-default">
    <div class="panel-heading"><h4>Shopping Cart</h4></div>
    <table class="table">
      <tr>
      <th>Afbeelding</th>
      <th>Product</th>
      <th>Aantal</th>
      <th>Prijs</th>
      </tr>
      <tr>
      <td><img src="Kunst/Schilder/dali1.png" alt="dali1" style="width:50px;height:50px"></td>
      <td>De volharding der herinnering <br/> (poster)</td>
      <td>1</td>
      <td>€15,-</td>
      </tr>
      <tr>
      <td><img src="Kunst/Schilder/vanGogh1.png" alt="vanGogh1" style="width:50px;height:50px"></td>
      <td>De sterrennacht <br/> (poster)</td>
      <td>1</td>
      <td>€15,-</td>
      </tr>
      <tr>
      <td><img src="Kunst/Schilder/brueghel1.png" alt="brueghel1" style="width:50px;height:50px"></td>
      <td>Dulle Griet <br/> (poster)</td>
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