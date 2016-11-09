<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Schilder</title>

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

<!-- The 1st 'Schilder'. If you click on the thumbnail you will be redirected to art_inside.php which will give you detailed information about the artist. -->
 <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="art_inside.php" class="thumbnail">
        <p>Dali</p>
        <img src="Kunst/Schilder/schilderDali.png" alt="schilderDali" style="width:100px;height:100px">
        <br>
    </a>
  </div>

<!-- The most familiar painting which belongs to the 1st 'Schilder'. -->
  <div class="col-md-2">
    <a href="Kunst/Schilder/dali1.png" class="thumbnail">
      <p>dali1</p>
      <img src="Kunst/Schilder/dali1.png" alt="dali1" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- A bit of information about the 1st 'Schilder'. -->
  <div class="pull-left"> <p class="navbar-text"> Tekst over Dali.</p> </div>
 </div>

<!-- The 2nd 'Schilder'. If you click on the thumbnail you will be redirected to art_inside.php which will give you detailed information about the artist. -->
 <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="art_inside.php" class="thumbnail">
      <p>Van Gogh</p>
      <img src="Kunst/Schilder/schilderVanGogh.png" alt="schilderVanGogh" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- The most familiar painting which belongs to the 2nd 'Schilder'. -->
  <div class="col-md-2">
    <a href="Kunst/Schilder/vanGogh1.png" class="thumbnail">
      <p>vanGogh1</p>
      <img src="Kunst/Schilder/vanGogh1.png" alt="vanGogh1" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- A bit of information about the 2nd 'Schilder'. -->
  <div class="pull-left"> <p class="navbar-text"> Tekst over Van Gogh.</p></div>

<div class="col-md-2"></div>
 </div>

<!-- The 3rd 'Schilder'. If you click on the thumbnail you will be redirected to art_inside.php which will give you detailed information about the artist. -->
 <div class="row">
   <div class="col-md-1">
   </div>
  <div class="col-md-2">
    <a href="art_inside.php" class="thumbnail">
      <p>Brueghel</p>
      <img src="Kunst/Schilder/schilderBrueghel.png" alt="schilderBrueghel" style="width:100px;height:100px">
      <br>
    </a>
  </div>

<!-- The most familiar painting which belongs to the 3rd 'Schilder'. -->
  <div class="col-md-2">
    <a href="Kunst/Schilder/brueghel1.png" class="thumbnail">
      <p>brueghel1</p>
      <img src="Kunst/Schilder/brueghel1.png" alt="brueghel1" style="width:100px;height:100px">
      <br>
    </a>
      <br>
      <br>
  </div>

<!-- A bit of information about the 3rd 'Schilder'. -->
  <div class="pull-left"> <p class="navbar-text"> Tekst over Brueghel.</p></div>
 </div>

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