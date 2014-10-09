<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$database = "megaspirit"; 
	
	mysql_connect($hostname, $username, $password) or die('Não foi possível ligar ao servidor mysql.');
	mysql_select_db($database) or die('Não foi possível seleccionar a base de dados.');	
	mysql_set_charset('utf8');
	
	$filedir = "/Users/leite/Sites/ordersys/";
	$webdir = "http://localhost/ordersys/";
	
	$fowebdir = "http://localhost/megaspirit/";
	$fofiledir = "/Users/leite/Sites/megaspirit/";
	
?>