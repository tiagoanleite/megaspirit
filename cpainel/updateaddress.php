<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$address_id = $_POST['address_id'];
	$company_id = $_POST['company_id'];
	
	$nick = $_POST['element_1'];
	
	$line1 = $_POST['element_8_1'];
	$line2 = $_POST['element_8_2'];
	$city = $_POST['element_8_3'];
	$region = $_POST['element_8_4'];
	$postal = $_POST['element_8_5'];
	$country = $_POST['element_8_6'];
	
	$notes = $_POST['element_9'];
	
	mysql_query("UPDATE addresses SET line1='".$line1."', line2='".$line2."', city='".$city."' , region='".$region."' , postal='".$postal."' , country='".$country."', notes='".$notes."' WHERE id='".$address_id."'"); 
	
	header('Location: ' . $webdir."addresses.php?id=".$company_id);
?>