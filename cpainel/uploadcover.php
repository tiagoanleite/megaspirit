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
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; $file = $_GET['file'];
		
		switch ($file) {
    case "index":
        $file_description="Index";
        break;
    case "services":
        $file_description="Sobre nós";
        break;
	case "products":
        $file_description="Produtos";
        break;
    case "contact":
        $file_description="Contactos";
        break;

		}
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_868072" class="appnitro" enctype="multipart/form-data" method="post" action="replacelanguage.php">
					<div class="form_description">
			<h2>Actualizar capa de página</h2>
			<p>Está prestes a actualizar a capa da página <b> <? echo $file_description; ?></b></p>
		</div>						
			<ul >
			
					<li class="section_break center" style="border-top:none;">
			<h3><img src="<? echo $fowebdir; ?>images/covers/<? echo $file; ?>.jpg" width="990px" height="250px" /></h3>
			<br><p>Carregue um ficheiro .jpeg com 990px por 250px</p><p>Certifique-se que o seu nome é <? echo $file; ?>.jpg</p>
		</li>		<li class="section_break center">
		<label class="description" for="element_8"> </label>
		<div>
			<input id="element_8" name="element_8" class="element file" type="file"/> 
		</div>  
		</li>
			
					<li class="section_break center">
					<input type="hidden" name="file" value="<? echo $file; ?>">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Actualizar capa" />
		</li>
			</ul>
		</form>	
        
		</div>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>