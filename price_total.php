Totaal: <input type="number" name="quantity" value="1">   <input type="button" onclick="priceTotal()" value="Zie totaalprijs" name="totaalprijs">

Totaalprijs: €<span id="demo"><?php $ID = $_GET['name']; echo productPage($db, $ID)[2]; ?></span>
	<script>
		function priceTotal() {
    	var x = document.getElementById("quantity").value * <?php $ID = $_GET['name']; echo productPage($db, $ID)[2]; ?>;
    	document.getElementById("demo").innerHTML = x;
		}
	</script>