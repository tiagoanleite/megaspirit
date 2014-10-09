<?php
include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];

	mysql_query("UPDATE products SET state = 2 WHERE id='".$id."'");
	
	$file = $fofiledir."images/products/".$id.".jpg";
	
	unlink($file);
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>