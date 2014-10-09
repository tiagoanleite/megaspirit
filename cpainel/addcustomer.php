<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$company = $_POST['element_1'];
	$nif = $_POST['element_2'];
	$username = $_POST['element_3'];
	$password = md5($_POST['element_4']);
	$rep = $_POST['element_5'];
	$email = $_POST['element_6'];
	$phone = $_POST['element_7'];
	$state = $_POST['element_9'];
	
	mysql_query("INSERT INTO customers(company, nif, username, password, rep, email, phone, state ) VALUES('".$company."', '".$nif."', '".$username."', '".$password."', '".$rep."', '".$email."', '".$phone."', '".$state."')");
	
	$id = mysql_insert_id();
	
	$line1 = $_POST['element_8_1'];
	$line2 = $_POST['element_8_2'];
	$city = $_POST['element_8_3'];
	$region = $_POST['element_8_4'];
	$postal = $_POST['element_8_5'];
	$country = $_POST['element_8_6'];
	
	mysql_query("INSERT INTO addresses(company, line1, line2, city, region, postal, country, type) VALUES('".$id."', '".$line1."', '".$line2."', '".$city."', '".$region."', '".$postal."', '".$country."', '0')");
	
	header('Location: ' . $webdir."customers.php");
?>