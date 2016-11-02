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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- LOGO-->
  <div class="row">
<div class="container-fluid">
<div class="media col-md-7">
  <div class="media-left">
    <a href="home.php">
      <img class="media-object" src="Logo.png" alt="Logo" width="100" height="100">
    </a>
  </div>
</div>
<div class="media col-md-5">
 <a href="#test" class="btn btn-primary" data-toggle="collapse">Login</a>
 <div id="test" class="collapse">
    <form action="login.php" method="POST" id="signin" class="navbar-form navbar-right" role="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-primary">Registreer</button>
                   </form>
                   </div>
                   </div>
</div>
</div>
    <!-- /LOGO-->


    	<!-- NAVBAR-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="gallery.php">Galerij</a></li>
        <li><a href="art.php">Kunstenaars</a></li>

    
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Zoeken">
        </div>
        <button type="submit" class="btn btn-default">Zoeken</button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->


</nav>

    	<!-- /NAVBAR-->

    	<!-- BODY-->
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
 <div class="panel panel-default">
  <div class="panel-heading">Over ons</div>
  <div class="panel-body">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. 
  </div>
</div>
</div>


    	<!-- /BODY-->

      <!-- NAV -->

<ul class="nav nav-tabs nav-justified  navbar-fixed-bottom">
  <li role="presentation"><a href="contact.php">Contact</a></li>
  <li role="presentation"><a href="legal.php">Legaal</a></li>
  <li class="active" role="presentation"><a href="about.php">Over ons</a></li>
</ul>
      <!-- /NAV -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>