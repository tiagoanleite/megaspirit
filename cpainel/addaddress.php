<?php
	include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$id = $_POST['customer'];
	
	$nick = $_POST['element_1'];
	
	$line1 = $_POST['element_8_1'];
	$line2 = $_POST['element_8_2'];
	$city = $_POST['element_8_3'];
	$region = $_POST['element_8_4'];
	$postal = $_POST['element_8_5'];
	$country = $_POST['element_8_6'];
	
	$notes = $_POST['element_9'];
	
	mysql_query("INSERT INTO addresses(company, line1, line2, city, region, postal, country, type, notes, nick, state) VALUES('".$id."', '".$line1."', '".$line2."', '".$city."', '".$region."', '".$postal."', '".$country."', '1', '".$nick."', '".$notes."', '1')");
	
	header('Location: ' . $webdir."addresses.php?id=".$id);
?>