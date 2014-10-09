<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$title_pt = $_POST['element_1_1'];
	$title_en = $_POST['element_1_1'];
	
	$state = $_POST['element_4'];
	
	mysql_query("INSERT INTO categories (state) VALUES('".$state."')");
	
	$id = mysql_insert_id();
	
	mysql_query("INSERT INTO categories_lang (category, language, title) VALUES('".$id."', 'pt', '".$title_pt."')");
	mysql_query("INSERT INTO categories_lang (category, language, title) VALUES('".$id."', 'en', '".$title_en."')");
	
	header('Content-Type: text/html; charset=utf-8');
	
	// Uploads the portuguese image
	$pasta_upload = $fofiledir."images/categories/pt";
	$nome_ficheiro = $_FILES['element_2']['name'];
	$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
	$novo_nome_ficheiro = $id.".jpg";
	move_uploaded_file($_FILES['element_2']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
	
	// Uploads the english image
	$pasta_upload = $fofiledir."images/categories/en";
	$nome_ficheiro = $_FILES['element_3']['name'];
	$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
	$novo_nome_ficheiro = $id.".jpg";
	move_uploaded_file($_FILES['element_3']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
		
	header('Location: ' . $webdir."category.php");
?>