<?php
		include "dependences/connection.inc.php";
		
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$pass = md5($password);
		
		$query = "SELECT * FROM customers WHERE username='".$user."' AND password='".$pass."' AND state = 1";
		$resultado = mysql_query($query);
		$dados = mysql_fetch_array($resultado);
		
		if(isset($dados["id"])){
			@session_start();
			$_SESSION["customer_name"] = $dados["company"];
			$_SESSION["company_id"] = $dados["id"];
			$_SESSION["logintime"] = date('Y-m-d H:i:s');
			
			header("Location: index.php");
			exit();
		}
		else{
			header("Location: login.php");
		}
?>