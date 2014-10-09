<?php
include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];
	
	mysql_query("DELETE FROM banners WHERE id='".$id."'");
	
	$file = $fofiledir."images/banners/".$id.".jpg";
	unlink($file);
	
	header('Location: ' . $webdir."banners.php");
?>