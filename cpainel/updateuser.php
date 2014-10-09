<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$user_id = $_POST['user_id'];
	
	$name = $_POST['element_1_1'];
	$username = $_POST['element_2'];
	$email = $_POST['element_3'];
	$state = $_POST['element_9'];
	
	if ($_POST['element_4'] == ""){
		mysql_query("UPDATE users SET username='".$username."', name='".$name."', email='".$email."', state='".$state."' WHERE id='".$user_id."'"); 
	}else{
		$password = md5($_POST['element_4']);
		mysql_query("UPDATE users SET username='".$username."', name='".$name."', email='".$email."', state='".$state."', password='".$password."' WHERE id='".$user_id."'");
	}
	
	header('Location: ' . $webdir."users.php");
?>