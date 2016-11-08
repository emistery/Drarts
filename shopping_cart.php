<?php
//create empty schopping cart
error_reporting(-1);

$winkelwagen = [];

//if there is a cookie containing a shopping cart, load this cookie into our shopping cart
if(isset($_COOKIE['winkelwagen'])){

  $cookie = $_COOKIE['winkelwagen'];

//if the is more than 1 artikel in winkelwagen, then they are seperated by an ','
  if(!strpos($cookie, ',')){
    $winkelwagen[] = $cookie;
  } else {
    //array id*aantal
    $winkelwagen = explode(',',$cookie);
  }
}

//if there is a new item for the shopping cart
if(isset($_POST['ID']) and isset($_POST['aantal'])){
  
  //add it
  $winkelwagen[] = $_POST['ID']."*".$_POST['aantal'];



  //store the shopping cart again
  setcookie('winkelwagen', implode($winkelwagen,','), time()+(60*60*24*7), '/');

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shopping Cart</title>

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

<!-- Shopping Cart table -->

<div class="col-md-1"></div>
<div class="col-md-10">
  <div class="panel panel-default">
    <div class="panel-heading"><img src="shoppingcart.png" style="width:50px;height:50px"></div>
    <table class="table">
      <tr>
      <th>Afbeelding</th>
      <th>
      </th>
      <th>Aantal</th>
      <th>Prijs</th>
      </tr>
      <?php
      $total = 0;
      if (!isset($winkelwagen[0])) {
        $winkelwagen[0] = 0;
      } else {
        //for every artikel in winkelwagen do:
        foreach ($winkelwagen as $artikel) { 
          
          //split id en aantal
          //artikel[0] -> id
          //artikel[1] -> aantal
          $artikelenaantal = explode('*', $artikel);

          //select on id
          $query = "SELECT afbeelding, prijs, beschrijving FROM artikel WHERE ID = ".$artikelenaantal[0];
          

          $result = mysqli_query($db, $query) or die('error querying datebase.');

          while ($row = mysqli_fetch_assoc($result)){
            //prijs = prijs van artikel * aantal
            $prijs = $row['prijs'] * $artikelenaantal[1];


          //totalprijs
          $total = $total + $prijs;

          print("<tr>"
          . "<td><a href=".$row ['afbeelding']. "><img src=".$row ['afbeelding']
          .   " class='thumbnail' alt=".$row ['afbeelding']
          . " style='width:50px;height:50px'></a></td>"
          . "<td>".$row ['beschrijving']. "</td>"
          . "<td>".$artikelenaantal[1]."</td>"
          . "<td>€".$prijs.",-</td>"
          . "</tr>");

          

          }
          //echo $winkelwagen[$i];
          //print_r(max(array_keys($winkelwagen)));
          //echo $winkelwagen[$i];
        }
      }
  
      ?>
<!--//echo $winkelwagen[0];
//echo $winkelwagen[1];
//print_r($winkelwagen);
      
/*    ?>
      <tr>
      <td><a href="Kunst/Schilder/dali1.png"><img src="Kunst/Schilder/dali1.png" class="thumbnail" alt="dali1" style="width:50px;height:50px"></a></td>
      <td>De Volharding der Herinnering <br/> (poster)</td>
      <td>1</td>
      <td>€15,-</td>
      </tr>
*/-->
   
    </table>
    <div class="panel-footer pull-right">Totaal: €<?php echo $total; ?>,- <a href="betaald.php" class="button">Betalen</a></div>
    <div> 
    </div>
    </div>

<br/>
<br/>
<br/>

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