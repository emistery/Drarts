<!-- This is a script to multiply the quantity given by the customer and the price of the product -->
<!-- Moved form from product.php so it works, because aantal was outside the form before-->
<form action="/Drarts/shopping_cart.php" method="post">Totaal: <input name="aantal" type="number" id="quantity" value="1">   
<br><br><input type="button" onclick="priceTotal()" value="Zie totaalprijs" name="totaalprijs">
<br>Totaalprijs: €<span id="demo"><?php $ID = $_GET['name']; echo productPage($db, $ID)[2]; ?></span><br><br>
<input type="submit" value="In winkelwagentje">
	<input type="hidden" name="ID" <?php echo "value=" . $_GET['name'] ?> >
</form>		<!-- The following script calculates the total price by multiplying the price of the product with the selected quantity -->
<script>
	function priceTotal() {
    	var x = document.getElementById("quantity").value * <?php $ID = $_GET['name']; echo productPage($db, $ID)[2]; ?>;
    	document.getElementById("demo").innerHTML = x;
	}
</script>