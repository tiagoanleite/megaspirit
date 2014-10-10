<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$database = "megaspirit"; 
	
	mysql_connect($hostname, $username, $password) or die('Não foi possível ligar ao servidor mysql.');
	mysql_select_db($database) or die('Não foi possível seleccionar a base de dados.');	
	mysql_set_charset('utf8');
	
	// Fileroot of the website
	$filedir = "/Users/leite/Sites/megaspirit";
	// Web address for the website
	$webdir = "http://localhost/megaspirit";
	// Web adress for the order system
	$ordersys ="http://localhost/ordersys/"
?>