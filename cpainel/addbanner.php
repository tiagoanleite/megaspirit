<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$alternative = $_POST['element_1'];
	$link = $_POST['element_2'];
	$active = $_POST['element_4'];
	
	mysql_query("INSERT INTO banners (link, alternative, active) VALUES('".$link."', '".$alternative."', '".$active."')");
	
	$id = mysql_insert_id();
	
	header('Content-Type: text/html; charset=utf-8');
	$pasta_upload = $fofiledir."images/banners";
	
	$nome_ficheiro = $_FILES['element_3']['name'];
	$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
	$novo_nome_ficheiro = $id.".jpg";
	move_uploaded_file($_FILES['element_3']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
		
	header('Location: ' . $webdir."banners.php");
?>