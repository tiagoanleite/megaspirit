<?php
	@session_start();
	
	if(!isset($_GET["lang"])){
		$_SESSION["language"]="pt";
	}
	else{
		$_SESSION["language"]=$_GET["lang"];
	}
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>