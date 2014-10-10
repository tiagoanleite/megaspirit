<?php 
	@session_start();
	
	$_SESSION["lang"]="pt";
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>