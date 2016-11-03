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

<div class="btn-group-vertical" role="group" aria-label="Koopkunst">
<button type="button" class="btn btn-default">Schilder</button>
<button type="button" class="btn btn-default">Beeldend Kunstenaar</button>
</div>

 <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="Kunst/Schilder/schilderDali.png" class="thumbnail">
      <p>Dali</p>
      <img src="Kunst/Schilder/schilderDali.png" alt="schilderDali" style="width:100px;height:100px">
      <br>
    </a>
  </div>
  <div class="col-md-2">
    <a href="Kunst/Schilder/dali1.png" class="thumbnail">
      <p>dali1</p>
      <img src="Kunst/Schilder/dali1.png" alt="dali1" style="width:100px;height:100px">
      <br>
    </a>
  </div>

  <div class="pull-left"> <p class="navbar-text"> Tekst over Dali.</p> </div>

  </div>

   <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="Kunst/Schilder/schilderVanGogh.png" class="thumbnail">
      <p>Van Gogh</p>
      <img src="Kunst/Schilder/schilderVanGogh.png" alt="schilderVanGogh" style="width:100px;height:100px">
      <br>
    </a>
  </div>
  <div class="col-md-2">
    <a href="Kunst/Schilder/vanGogh1.png" class="thumbnail">
      <p>vanGogh1</p>
      <img src="Kunst/Schilder/vanGogh1.png" alt="vanGogh1" style="width:100px;height:100px">
      <br>
    </a>
  </div>

  <div class="pull-left"> <p class="navbar-text"> Tekst over Van Gogh.</p> </div>

<div class="col-md-2">
   </div>
  </div>

      <!-- /BODY-->
   <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="Kunst/Schilder/schilderBrueghel.png" class="thumbnail">
      <p>Brueghel</p>
      <img src="Kunst/Schilder/schilderBrueghel.png" alt="schilderBrueghel" style="width:100px;height:100px">
      <br>
    </a>
  </div>
  <div class="col-md-2">
    <a href="Kunst/Schilder/Brueghel1.png" class="thumbnail">
      <p>brueghel1</p>
      <img src="Kunst/Schilder/Brueghel1.png" alt="Brueghel1" style="width:100px;height:100px">
      <br>
    </a>
  </div>

  <div class="pull-left"> <p class="navbar-text"> Tekst over Brueghel.</p> </div>

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