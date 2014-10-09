<?php
include "control.inc.php";
	include "dependences/connection.inc.php";
	
	$user_id = $_POST['user_id'];
	
	$name = $_POST['element_1_1'];
	$username = $_POST['element_2'];
	$email = $_POST['element_3'];
	$password = md5($_POST['element_4']);
	$state = $_POST['element_5'];
	
	mysql_query("INSERT INTO users(name, username, email, password, state) VALUES('".$name."', '".$username."', '".$email."', '".$password."', '".$state."')");
	
	header('Location: ' . $webdir."users.php");
?>