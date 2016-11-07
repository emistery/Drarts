<?php
include_once 'sql_connect.php';

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
<?php 
       if (isset($_SESSION['authorized'])) {
       if ($_SESSION['authorized'] == 'TRUE') {
         include_once 'loggedin.php';
       }
     }else{
      include_once 'loginform.php';
     }

     
      
?>
    </div>
  </div>