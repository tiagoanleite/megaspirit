<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$news_id = $_POST['news_id'];
	
	$title_pt = $_POST['element_1'];
	$text_pt = $_POST['element_2'];
	
	$title_en = $_POST['element_5'];
	$text_en = $_POST['element_6'];
	
	mysql_query("UPDATE news_lang SET title='".$title_pt."', text='".$text_pt."' WHERE news='".$news_id."' AND language='pt'");
	mysql_query("UPDATE news_lang SET title='".$title_en."', text='".$text_en."' WHERE news='".$news_id."' AND language='en'");
	
	header('Content-Type: text/html; charset=utf-8');
	
	if($_FILES['element_8']['size'] === 0 || empty($_FILES['element_8']['tmp_name'])) {
    	
	}else{
	
		$file = $fofiledir."images/news/".$news_id.".jpg";
		unlink($file);
		
		$pasta_upload = $fofiledir."images/news";
		$nome_ficheiro = $_FILES['element_8']['name'];
		$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
		$novo_nome_ficheiro = $banner_id.".jpg";
		move_uploaded_file($_FILES['element_8']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
	}
	
	header('Location: ' . $webdir."news.php");
?>