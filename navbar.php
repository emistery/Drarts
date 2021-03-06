<?php  
  $parts = explode("/", $_SERVER["PHP_SELF"]);
  $file = $parts[2];
?>
<div class="container-fluid">
<nav class="navbar navbar-default">
  
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
        <li class="<?php echo $file == 'home.php' ? 'active' : null ?>"><a href="home.php">Home</a></li>
        <li class="<?php echo $file == 'gallery.php' ? 'active' : null ?>"><a href="gallery.php">Galerij</a></li>
        <li class="<?php echo $file == 'art.php' ? 'active' : null ?>"><a href="art.php">Kunstenaars</a></li>
    
      </ul>
        

      <form action="search.php" method="GET" class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="Zoeken">
        </div>
        <button type="submit" class="btn btn-default">Zoeken</button>
      </form>

    </div><!-- /.navbar-collapse -->
  

  
</nav>
</div><!-- /.container-fluid -->