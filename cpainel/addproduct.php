<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$title_pt = $_POST['element_1_1'];
	$title_en = $_POST['element_1_1'];
	
	$state = $_POST['element_4'];
	
	$category = $_POST['element_5'];
	
	mysql_query("INSERT INTO products (category, state) VALUES('".$category."', '".$state."')");
	
	$id = mysql_insert_id();
	
	mysql_query("INSERT INTO products_lang (product, language, title) VALUES('".$id."', 'pt', '".$title_pt."')");
	mysql_query("INSERT INTO products_lang (product, language, title) VALUES('".$id."', 'en', '".$title_en."')");
	
	header('Content-Type: text/html; charset=utf-8');
	
	// Uploads the portuguese image
	$pasta_upload = $fofiledir."images/products";
	$nome_ficheiro = $_FILES['element_2']['name'];
	$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
	$novo_nome_ficheiro = $id.".jpg";
	move_uploaded_file($_FILES['element_2']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
		
	header('Location: ' . $webdir."products.php?id=".$category);
?>