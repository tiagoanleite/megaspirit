<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
	<link rel="stylesheet" href="styles/font-awesome.min.css">
</head>

<body>

<!-- chama o as dependências e o menu -->
	<?php include "control.inc.php"; include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; $company_id = $_SESSION["company_id"]; ?>

<div class="content">
		<div class="wrapper">
           <div class="separator"></div>
           <div class="center">
               <p>Mensagem enviada com sucesso!</p>
</div>
<div class="separator"></div>
<div class="center"><i class="fa fa-paper-plane-o fa-2x"></i></div>
           <div class="separator"></div>
		</div>
	</div>
    
    <div class="separator"></div>
<div class="clear"></div>
<div class="footer">
	<div class="footer-rights">&copy; 2014 - Megaspirit Unipessoal Lda.</div>
</div>

</body>
</html>