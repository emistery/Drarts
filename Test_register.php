<!DOCTYPE html>
<head>
</head>
<body>
<table><from action="Test_register.php" method="post">

 			<from action="register_pass.php" method="post">
 			<input type="test" name="text" value="">Text
 			<input password="" name="password" value="">Password
 			<input type="submit" name="submit" value="Submit">
 			</form>

      <!-- Test -->
      <?php
        if(empty($_POST)){
          echo "POST is empty";
        }else{
          print_r($_POST);
        }
      ?>

</body>
</html>