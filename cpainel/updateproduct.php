<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$product_id = $_POST['product_id'];
	
	$title_pt = $_POST['element_1_1'];
	$title_en = $_POST['element_1_2'];
	
	$category = $_POST['element_5'];
	
	$state = $_POST['element_9'];
	
	mysql_query("UPDATE products SET state='".$state."', category='".$category."' WHERE id ='".$product_id."'");
	
	mysql_query("UPDATE products_lang SET title='".$title_pt."' WHERE product='".$product_id."' AND language='pt'");
	mysql_query("UPDATE categories_lang SET title='".$title_en."' WHERE product='".$product_id."' AND language='en'");

	
	header('Content-Type: text/html; charset=utf-8');
	
	if($_FILES['element_2']['size'] === 0 || empty($_FILES['element_2']['tmp_name'])) {
    	
	}else{
	
		$file = $fofiledir."images/products/".$product_id.".jpg";
		unlink($file);
		
		$pasta_upload = $fofiledir."images/products";
		$nome_ficheiro = $_FILES['element_2']['name'];
		$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
		$novo_nome_ficheiro = $product_id.".jpg";
		move_uploaded_file($_FILES['element_2']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
	}
		
	header('Location: ' . $webdir."products.php?id=".$category);
?>