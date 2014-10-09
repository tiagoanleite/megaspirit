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
			<div class="tabletitle"><b>Ficheiros de linguagem</b></div>
			<div class="separator"></div>

               <table class="customtable">
                    <tr><td>Abreviação</td><td>Descrição</td><td colspan="2">Acções</td></tr>
                    	<tr><td class="center">pt</td><td class="center">Português de Portugal</td><td class="center"><a href="uploadlanguage.php?file=pt"><i class="fa fa-upload fa-lg"></i></a></td><td class="center"><a href="<? echo $fowebdir; ?>languages/pt.inc.php" target="_blank"><i class="fa fa-download fa-lg"></a></i></td>
                    	<tr><td class="center">en</td><td class="center">English (international)</td><td class="center"><a href="uploadlanguage.php?file=en"><i class="fa fa-upload fa-lg"></i></a></td><td class="center"><a href="<? echo $fowebdir; ?>languages/en.inc.php" target="_blank"><i class="fa fa-download fa-lg"></i></a></td>
                    	<tr><td class="center">contactinfo</td><td class="center">Informações de contacto</td><td class="center"><a href="uploadlanguage.php?file=contactinfo"><i class="fa fa-upload fa-lg"></i></a></td><td class="center"><a href="<? echo $fowebdir; ?>languages/contactinfo.inc.php" target="_blank"><i class="fa fa-download fa-lg"></i></a></td>
                </table>
			
			<div class="separator"></div><hr><div class="separator"></div>

           <div class="tabletitle"><b>Capas das páginas</b></div>
           <div class="separator"></div>


               <table class="customtable">
                    <tr><td>Miniatura</td><td>Página</td><td colspan="2">Acções</td></tr>
                    
                    <tr><td class="center"><img src="<? echo $fowebdir; ?>images/covers/index.jpg" width="495px" height="125px" alt="Index" /></td><td class="center">Index</td><td class="center"><a href="<? echo $fowebdir; ?>index.php" target="_blank"><i class="fa fa-external-link fa-lg"></i></a></td><td class="center"><a href="uploadcover.php?file=index"><i class="fa fa-upload fa-lg"></i></a></td>
                    <tr><td class="center"><img src="<? echo $fowebdir; ?>images/covers/services.jpg" width="495px" height="125px" alt="Sobre nós" /></td><td class="center">Sobre nós</td><td class="center"><a href="<? echo $fowebdir; ?>services.php" target="_blank"><i class="fa fa-external-link fa-lg"></i></a></td><td class="center"><a href="uploadcover.php?file=services"><i class="fa fa-upload fa-lg"></i></a></td>
                    <tr><td class="center"><img src="<? echo $fowebdir; ?>images/covers/products.jpg" width="495px" height="125px" alt="Produtos" /></td><td class="center">Produtos</td><td class="center"><a href="<? echo $fowebdir; ?>products.php" target="_blank"><i class="fa fa-external-link fa-lg"></i></a></td><td class="center"><a href="uploadcover.php?file=products"><i class="fa fa-upload fa-lg"></i></a></td>
                    <tr><td class="center"><img src="<? echo $fowebdir; ?>images/covers/contact.jpg" width="495px" height="125px" alt="Contactos" /></td><td class="center">Contactos</td><td class="center"><a href="<? echo $fowebdir; ?>contact.php" target="_blank"><i class="fa fa-external-link fa-lg"></i></a></td><td class="center"><a href="uploadcover.php?file=contact"><i class="fa fa-upload fa-lg"></i></a></td>


                </table>
           <div class="separator"></div>
           <div class="separator"></div>
       </div>

	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>