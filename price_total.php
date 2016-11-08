<?php
	
	$numbervalue = quantity.value;
	
	$ID = $_GET['name'];
	
	$price_piece = productPage($db, $ID)[2];

	function price_total($value, $price){
		return $value * $price;
	}

?>