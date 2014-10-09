<?php include "control.inc.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="styles/form.css" media="all">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
	<script type="text/javascript" src="scripts/form.js"></script>
</head>

<body>

	<!-- chama o as dependências e o menu -->
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; $company_id = $_SESSION["company_id"]; ?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_866123" class="appnitro"  method="post" action="sendcontact.php">
					<div class="form_description">
			<h2>Contactos</h2>
			<p>Contacte-nos e responderemos o mais brevemente possível.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Assunto </label>
		<div>
			<input id="element_1" name="element_1" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Assunto do contacto</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Mensagem </label>
		<div>
			<textarea id="element_2" name="element_2" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_2"><small>Descreva detalhadamente a situação</small></p> 
		</li>
			
					<li class="buttons">			    <input type="hidden" name="form_id" value="852641" />
			    <input type="hidden" name="company_id" value="<? echo $company_id; ?>">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Apagar">
		</li>
			</ul>
		</form>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>