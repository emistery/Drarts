Product toevoegen
<form action="upload.php" method="POST">
<div class="input-group input-group-lg">
  <input name="PID" type="text" class="form-control" placeholder="ID van 5 getallen" aria-describedby="sizing-addon2">
</div>
<div class="input-group input-group-lg">
  <input name="beschrijving" type="text" class="form-control" placeholder="Beschrijving" aria-describedby="sizing-addon2">
</div>
<div class="input-group input-group-lg">
  <input name="prijs" type="text" class="form-control" placeholder="Prijs" aria-describedby="sizing-addon2">
</div>
<div class="input-group input-group-lg">
  <input name="artistID" type="text" class="form-control" placeholder="Kunstenaar ID" aria-describedby="sizing-addon2">
</div>
<!-- Enter name of image, we couldn't find a way to upload image, so image already has to be in folder-->
 <div class="input-group input-group-lg">
  <input name="image" type="text" class="form-control" placeholder="Link naar afbeelding" aria-describedby="sizing-addon2">
</div>  
<div class="input-group input-group-lg">

  <input type="submit" class="form-control" aria-describedby="sizing-addon2">
</div> 
</form>
