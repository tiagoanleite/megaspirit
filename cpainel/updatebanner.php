<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$banner_id = $_POST['banner_id'];
	
	$alternative = $_POST['element_1'];
	$link = $_POST['element_2'];
	$active = $_POST['element_9'];
	
	mysql_query("UPDATE banners SET alternative='".$alternative."', link='".$link."', active='".$active."' WHERE id='".$banner_id."'"); 
	
	header('Content-Type: text/html; charset=utf-8');
	
	if($_FILES['element_3']['size'] === 0 || empty($_FILES['element_3']['tmp_name'])) {
    	
	}else{
	
		$file = $fofiledir."images/banners/".$banner_id.".jpg";
		unlink($file);
		
		$pasta_upload = $fofiledir."images/banners";
		$nome_ficheiro = $_FILES['element_3']['name'];
		$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
		$novo_nome_ficheiro = $banner_id.".jpg";
		move_uploaded_file($_FILES['element_3']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
	}
	
	header('Location: ' . $webdir."banners.php");
	
?>