<?php
session_start();

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
include 'sql_connect.php'

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
      if ($_SESSION['authorized'] == FALSE) {
        include_once 'loginform.php';
        
      }else{
        
        include_once 'loggedin.php';
      }
      
?>
    </div>
  </div>