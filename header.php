<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webdev";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
  die("The connection is not successful: " .
    mysqli_connect_error() . 
      " (" . mysqli_connect_errno() . ")"




    );
}





?> 
  <div class="row">
    <div class="container-fluid">
      <div class="media col-md-2">
        <div class="media-left">
          <a href="home.php">
            <img class="media-object" src="Logo.png" alt="Logo" width="100" height="100">
          </a>
        </div>
      </div>
      <div class="media col-md-10">
        <div class="row">
          <div class="col-md-5 pull-right">
        <a href="#test" class="btn btn-primary login-btn" data-toggle="collapse">Login</a>
          
        </div>
        </div>
        
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