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
		<form id="form_852367" class="appnitro" enctype="multipart/form-data" method="post" action="addbanner.php">
					<div class="form_description">
			<h2>Novo banner</h2>
			<p>Inserir nova barra de publicidade</p>
		</div>			
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Descrição do banner </label>
		<div>
			<input id="element_1" name="element_1" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Texto alternativo que deve aparecer caso a imagem não seja carregada</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Web Site </label>
		<div>
			<input id="element_2" name="element_2" class="element text large" type="text" maxlength="255" value="http://"/> 
		</div><p class="guidelines" id="guide_2"><small>Inserir o web site de destino do banner</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Estado </label>
		<span>
			<input id="element_4_1" name="element_4" class="element radio" type="radio" value="1" checked="checked"/>
<label class="choice" for="element_4_1">Activo</label>
<input id="element_4_2" name="element_4" class="element radio" type="radio" value="0" />
<label class="choice" for="element_4_2">Inactivo</label>

		</span><p class="guidelines" id="guide_4"><small>Escolhe se é visível na página inicial ou não</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Imagem </label>
		<div>
			<input id="element_3" name="element_3" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_3"><small>Imagem a utilizar para o banner. Utilizar imagens prontas para a web com 900 por 150 e em formato .jpg</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="852367" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Inserir banner" />
                <input id="saveForm" class="button_text" type="reset" name="reset" value="Reiniciar" />
		</li>
			</ul>
		</form>	
        
		</div>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>