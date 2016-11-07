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
  <form class="form-horizontal" role="form" method="post" action="#form">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Naam</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Voor & Achternaam" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@domein.nl" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Bericht</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="4" name="message"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="human" name="human" placeholder="Antwoord">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <input id="submit" name="submit" type="submit" value="Verstuur" class="btn btn-primary">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <! Will be used to display an alert to the user>
    </div>
  </div>
</form>

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