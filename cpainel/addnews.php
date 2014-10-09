<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$title_pt = $_POST['element_1'];
	$text_pt = $_POST['element_2'];
	
	$title_en = $_POST['element_5'];
	$text_en = $_POST['element_6'];
	
	mysql_query("INSERT INTO news (date) VALUES(CURDATE())");
	
	$id = mysql_insert_id();
	
	mysql_query("INSERT INTO news_lang (news, language, title, text) VALUES('".$id."', 'pt', '".$title_pt."', '".$text_pt."')");
	mysql_query("INSERT INTO news_lang (news, language, title, text) VALUES('".$id."', 'en', '".$title_en."', '".$text_en."')");
	
	header('Content-Type: text/html; charset=utf-8');
	$pasta_upload = $fofiledir."images/news";
	
	$nome_ficheiro = $_FILES['element_8']['name'];
	$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
	$novo_nome_ficheiro = $id.".jpg";
	move_uploaded_file($_FILES['element_8']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
		
	header('Location: ' . $webdir."news.php");
?>