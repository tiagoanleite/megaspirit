<?php
include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];
	
	mysql_query("UPDATE customers SET status = 2 WHERE id='".$id."'");
	#mysql_query("UPDATE orders  SET status = -1 WHERE customer='".$id."'");
	
	header('Location: ' . $webdir."customers.php");
?>