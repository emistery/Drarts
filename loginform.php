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
                    <input id="username" type="text" class="form-control" name="username" value="" placeholder="Gebruikersnaam">                                        
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <a href=register.php class="btn btn-primary">Registreer</a>
           </form>
        </div>
      </div>