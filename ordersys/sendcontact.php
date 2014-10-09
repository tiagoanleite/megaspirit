<?php
	include "control.inc.php";
	include "dependences/connection.inc.php";
	include $fofiledir."languages/contactinfo.inc.php";
	
	$company_id = $_POST['company_id'];
	
	$result = mysql_query("SELECT company FROM customers WHERE id='".$company_id."'");
	$data = mysql_fetch_array($result);
	$company_name = $data['company'];
	
	$to = $contactinfo["email"];
	$subject = "Nova mensagem de: ".$company_name." : ".$_POST['element_1'];
	$body = $_POST['element_2'];
	
	mail($to, $subject, $body);
	
	header('Location: ' . $webdir."sent.php");
?>