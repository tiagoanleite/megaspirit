<?php
include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];
	
	mysql_query("UPDATE category SET state = 2 WHERE id='".$id."'");
	mysql_query("UPDATE products SET state = 2 WHERE category='".$id."'");
	
	$file = $fofiledir."images/categories/pt/".$id.".jpg";
	unlink($file);
	
	$file = $fofiledir."images/categories/en/".$id.".jpg";
	unlink($file);
	
	header('Location: ' . $webdir."catalog.php");
?>