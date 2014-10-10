<?php
	@session_start();
	
	if(!isset($_SESSION["language"])){
		$_SESSION["language"]="pt";
	}
	
	$lang = $_SESSION['language'];
	
	require "/Users/leite/Sites/megaspirit/languages/".$lang.".inc.php";
?>