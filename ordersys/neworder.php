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
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; ?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_866123" class="appnitro"  method="post" action="/formbuilder/view.php">
					<div class="form_description">
			<h2>Pedido de cotação</h2>
			<p>Criar um novo pedido cotação</p>
		</div>						
			<ul >
			
					<li id="li_4" >
		<label class="description" for="element_4">Produto </label>
		<div>
		<select class="element select medium" id="element_4" name="element_4"> 
			<option value="" selected="selected"></option>
<option value="1" >Bifana</option>
<option value="2" >Rijões</option>
<option value="3" >Asas de frango</option>

		</select>
		</div><p class="guidelines" id="guide_4"><small>Escolha o produto para o qual pretende uma cotação</small></p> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Quantidade </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Insira a quantidade em que está interessado</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Local de entrega </label>
		<div>
		<select class="element select medium" id="element_5" name="element_5"> 
			<option value="" selected="selected"></option>
<option value="1" >Morada de facturação</option>
<option value="2" >Pavilhão A</option>
<option value="3" >Externato</option>

		</select>
		</div><p class="guidelines" id="guide_5"><small>Indique o local de descarga da encomenda</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Data limite </label>
		<span>
			<input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_1">MM</label>
		</span>
		<span>
			<input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_2">DD</label>
		</span>
		<span>
	 		<input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_2_3">YYYY</label>
		</span>
	
		<p class="guidelines" id="guide_2"><small>Insira a data limite para entrega do produto</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Notas </label>
		<div>
			<textarea id="element_3" name="element_3" class="element textarea small"></textarea> 
		</div><p class="guidelines" id="guide_3"><small>Utilize este campo para indicações especiais a considerar</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="852641" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar">
				<input id="saveForm" class="button_text" type="reset" name="reset" value="Reiniciar">
		</li>
			</ul>
		</form>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>