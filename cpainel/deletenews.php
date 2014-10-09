<?php
include "control.inc.php";
	include "dependences/connection.inc.php";

	$id = $_GET['id'];
	
	mysql_query("DELETE FROM news WHERE id='".$id."'");
	mysql_query("DELETE FROM news_lang WHERE news='".$id."'");
	
	$file = $fofiledir."images/news/".$id.".jpg";
	
	unlink($file);
	
	header('Location: ' . $webdir."news.php");
?>