<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$category_id = $_POST['category_id'];
	
	$title_pt = $_POST['element_1_1'];
	$title_en = $_POST['element_1_2'];
	
	$state = $_POST['element_9'];
	
	mysql_query("UPDATE categories SET state='".$state."' WHERE id ='".$category_id."'");
	
	mysql_query("UPDATE categories_lang SET title='".$title_pt."' WHERE category='".$category_id."' AND language='pt'");
	mysql_query("UPDATE categories_lang SET title='".$title_en."' WHERE category='".$category_id."' AND language='en'");

	
	header('Content-Type: text/html; charset=utf-8');
	
	if($_FILES['element_2']['size'] === 0 || empty($_FILES['element_2']['tmp_name'])) {
    	
	}else{
	
		$file = $fofiledir."images/categories/pt/".$category_id.".jpg";
		unlink($file);
		
		$pasta_upload = $fofiledir."images/categories/pt";
		$nome_ficheiro = $_FILES['element_2']['name'];
		$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
		$novo_nome_ficheiro = $category_id.".jpg";
		move_uploaded_file($_FILES['element_2']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
	}
	
	if($_FILES['element_3']['size'] === 0 || empty($_FILES['element_3']['tmp_name'])) {
    	
	}else{
	
		$file = $fofiledir."images/categories/en/".$category_id.".jpg";
		unlink($file);
		
		$pasta_upload = $fofiledir."images/categories/en";
		$nome_ficheiro = $_FILES['element_3']['name'];
		$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
		$novo_nome_ficheiro = $category_id.".jpg";
		move_uploaded_file($_FILES['element_3']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
	}
		
	header('Location: ' . $webdir."category.php");
?>