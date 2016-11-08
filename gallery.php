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

<div class="col-md-12">
 <form method="post">
    <select name ="ordenen" onchange="this.form.submit()">
    <option value="a-z" <?php if(isset($_POST['ordenen']) && $_POST['ordenen'] == "a-z"){print(" selected ");} ?>>a-z</option> 
    <option value="z-a" <?php if(isset($_POST['ordenen']) && $_POST['ordenen'] == "z-a"){print(" selected ");} ?>>z-a</option>
    <option value="g-d" <?php if(isset($_POST['ordenen']) && $_POST['ordenen'] == "g-d"){print(" selected ");} ?>>goedkoop-duur</option>  
    <option value="d-g" <?php if(isset($_POST['ordenen']) && $_POST['ordenen'] == "d-g"){print(" selected ");} ?>>duur-goedkoop</option>

    </select>

</form> 
</div>


<?php
//functie


    $query = "SELECT a.ID, beschrijving, prijs, a.afbeelding, naam FROM artikel a JOIN kunstenaar k ON a.Kunstenaar_ID = k.ID ";
    mysqli_query($db, $query) or die('error querying datebase.');

          
          $query .= " order by "; 

if(isset($_POST['ordenen'])){
    if($_POST['ordenen'] == "z-a"){
       $query = $query . "beschrijving desc";
    } elseif ($_POST['ordenen'] == "g-d") {
       $query = $query . "prijs asc"; 
    } elseif ($_POST['ordenen'] == "d-g") {
       $query = $query . "prijs desc"; 
    } else {
       $query = $query . "beschrijving asc"; 
    }
} else { 
       $query = $query . "beschrijving asc";
}

    $result = mysqli_query($db, $query) or die('error querying datebase.');

    $start = 0;
    
    while ($row = mysqli_fetch_assoc($result)){
     $gallerydiv = "<div class= 'row'>"
    . "<div class= 'col-md-4'>"
    . "</div>"
    . "<div class='col-md-4'>"
         . "<a class='thumbnail' href=product.php?name=" . $row['ID'] . " >"
             . "<p>" . $row['beschrijving']. " van ". $row['naam'] ."</p>"
             . "<p>". "Prijs: ". $row['prijs'] . "</p>"   
             . "<img src=".$row['afbeelding']." style='width:300px;height:300px'>"
             . "<br>"
         . "</a>"
    . "</div>"
    . "<div class= 'col-md-4'>"
    . "</div>"
    . "</div>"  ; 

print $gallerydiv;         
}


?>


      <!-- /BODY-->

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