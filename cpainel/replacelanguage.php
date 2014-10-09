<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$newfile = $_POST['file'];
	
	$oldfile = $fofiledir."languages/".$newfile.".inc.php";
	
	unlink($oldfile);
	
	header('Content-Type: text/html; charset=utf-8');
	$pasta_upload = $fofiledir."languages";
	
	$nome_ficheiro = $_FILES['element_8']['name'];
	$extensao_ficheiro = pathinfo($nome_ficheiro, PATHINFO_EXTENSION);
	$novo_nome_ficheiro = $newfile.".inc.php";
	move_uploaded_file($_FILES['element_8']['tmp_name'], $pasta_upload."/".$novo_nome_ficheiro);
		
	header('Location: ' . $webdir."cms.php");
?>