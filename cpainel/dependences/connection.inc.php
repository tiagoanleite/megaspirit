<?php 
	//mysql server credentials
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$database = "megaspirit"; 
	
	mysql_connect($hostname, $username, $password) or die('Unable to connect to the server. Please try again later.');
	mysql_select_db($database) or die('Unable to connect to the database. Please try again later.');	
	mysql_set_charset('utf8');
	
	//Frontoffice directions
	$fowebdir = "http://localhost/megaspirit/";
	$fofiledir = "/Users/leite/Sites/megaspirit/";
	
	//Backoffice directions
	$webdir = "http://localhost/cpainel/";
	$filedir = "/Users/leite/Sites/cpainel/";
	
?>