<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Beeldend Kunstenaar</title>

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
    background-image: url(Achtergrond/achtergrond2.jpg);
    }
  </style>

  <body>
  <!-- HEADER-->
    <?php include 'header.php' ?>
    <!-- /HEADER-->


      <!-- NAVBAR-->
<?php include 'navbar.php' ?>

      <!-- /NAVBAR-->

      <!-- BODY-->

<!-- The buttons with which you can choose between the 2 different kinds of artists: 'Schilder' and 'Beeldend Kunstenaar'. -->
<div class="col-md-12">
  <div class="btn-group-vertical" role="group" aria-label="Koopkunst">
  <a href="art.php" class="btn btn-default" role="button">Schilder</a>
  <a href="art2.php" class="btn btn-default" role="button">Beeldend Kunstenaar</a>
  <br/>
  </div>
</div>

<!-- The 1st 'Beeldend Kunstenaar'. If you click on the thumbnail you will be redirected to art_inside.php which will give you detailed information about the artist. -->
 <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="art_inside.php" class="thumbnail">
      <p>Jansen</p>
      <img src="Kunst/Beeld/beeldJansen.png" alt="beeldJansen" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- The most familiar painting which belongs to the 1st 'Beeldend Kunstenaar'. -->
  <div class="col-md-2">
    <a href="Kunst/Beeld/jansen1.png" class="thumbnail">
      <p>jansen1</p>
      <img src="Kunst/Beeld/jansen1.png" alt="jansen1.png" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- A bit of information about the 1st 'Beeldend Kunstenaar'. -->
  <div class="pull-left"> <p class="navbar-text"> Tekst over Jansen.</p> </div>
 </div>

<!-- The 2nd 'Beeldend Kunstenaar'. If you click on the thumbnail you will be redirected to art_inside.php which will give you detailed information about the artist. -->
   <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="art_inside.php" class="thumbnail">
      <p>Molin</p>
      <img src="Kunst/Beeld/beeldMolin.png" alt="beeldMolin.png" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- The most familiar painting which belongs to the 2nd 'Beeldend Kunstenaar'. -->
  <div class="col-md-2">
    <a href="Kunst/Beeld/molin1.png" class="thumbnail">
      <p>molin1</p>
      <img src="Kunst/Beeld/molin1.png" alt="molin1.png" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- A bit of information about the 2nd 'Beeldend Kunstenaar'. -->
  <div class="pull-left"> <p class="navbar-text"> Tekst over Molin.</p> </div>

<div class="col-md-2">
   </div>
  </div>

<!-- The 3rd 'Beeldend Kunstenaar'. If you click on the thumbnail you will be redirected to art_inside.php which will give you detailed information about the artist. -->
   <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="art_inside.php" class="thumbnail">
      <p>Sawaya</p>
      <img src="Kunst/Beeld/beeldSawaya.png" alt="beeldSawaya" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- The most familiar painting which belongs to the 3rd 'Beeldend Kunstenaar'. -->
  <div class="col-md-2">
    <a href="Kunst/Beeld/sawaya1.png" class="thumbnail">
      <p>sawaya1</p>
      <img src="Kunst/Beeld/sawaya1.png" alt="sawaya1" style="width:100px;height:100px">
      <br>
    </a>
    <br>
    <br>
  </div>

<!-- A bit of information about the 3rd 'Beeldend Kunstenaar'. -->
  <div class="pull-left"> <p class="navbar-text"> Tekst over Sawaya.</p> </div>

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