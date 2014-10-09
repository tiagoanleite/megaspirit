<?php
	include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$company_id = $_POST['company_id'];
	
	$company = $_POST['element_1'];
	$nif = $_POST['element_2'];
	$username = $_POST['element_3'];
	$rep = $_POST['element_5'];
	$email = $_POST['element_6'];
	$phone = $_POST['element_7'];

	if ($_POST['element_4'] == ""){
		mysql_query("UPDATE customers SET company='".$company."', nif='".$nif."', username='".$username."', rep='".$rep."', email='".$email."', phone='".$phone."' WHERE id='".$company_id."'"); 
	}else{
		$password = md5($_POST['element_4']);
		mysql_query("UPDATE customers SET company='".$company."', nif='".$nif."', username='".$username."', rep='".$rep."', email='".$email."', phone='".$phone."', password='".$password."' WHERE id='".$company_id."'");
	}
	
	$line1 = $_POST['element_8_1'];
	$line2 = $_POST['element_8_2'];
	$city = $_POST['element_8_3'];
	$region = $_POST['element_8_4'];
	$postal = $_POST['element_8_5'];
	$country = $_POST['element_8_6'];
	
	mysql_query("UPDATE addresses SET line1='".$line1."', line2='".$line2."', city='".$city."', region='".$region."', postal='".$postal."', country='".$country."' WHERE type='0' AND company='".$company_id."'");
	
	header('Location: ' .$webdir."profile.php");
	
?>