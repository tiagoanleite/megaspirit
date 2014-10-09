<?php
include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];
	
	mysql_query("DELETE FROM users WHERE id='".$id."'");
	
	header('Location: ' . $webdir."users.php");
?>