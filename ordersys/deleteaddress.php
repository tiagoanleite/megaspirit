<?php
	include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];
	
	mysql_query("UPDATE addresses SET state = 0 WHERE id='".$id."'");

	header('Location: ' . $webdir."addresses.php");
?>