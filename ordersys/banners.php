<?php include "control.inc.php"; ?>
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
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; ?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
            
           <div class="options">
           <a href="newbanner.php">+ Adicionar novo banner</a>
           </div>
           
           <div class="separator"></div>
               <table class="customtable">
                    <tr><td>Imagem</td><td>Link</td><td>Descrição</td><td>Estado</td><td colspan="2">Acções</td></tr>
                    <tr><td><img src="images/banners/2.jpg" width="300" height="50" alt=""/></td><td>http://d-datatech.com</td><td>D-Datatech: os melhores preços!</td><td>Visível</td><td>Apagar</td><td>Editar</td></tr>
                    <tr><td><img src="images/banners/17.jpg" width="300" height="50" alt=""/></td><td>http://sourtooth.com</td><td>As melhores tartes dos USA</td><td>Invisível</td><td>Apagar</td><td>Editar</td></tr>
                </table>
            
           <div class="separator"></div>
		</div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>