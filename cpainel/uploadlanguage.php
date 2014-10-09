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
    case "pt":
        $file_description="Português de Portugal";
        break;
    case "en":
        $file_description="English (international)";
        break;
	case "contactinfo":
        $file_description="Informações de contacto";
        break;

		}
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_868072" class="appnitro" enctype="multipart/form-data" method="post" action="replacelanguage.php">
					<div class="form_description">
			<h2>Actualizar ficheiro de linguagem</h2>
			<p>Está prestes a actualizar a tradução do website para <b><? echo $file_description; ?></b></p>
		</div>						
			<ul >
			
					<li class="section_break center" style="border-top:none;">
			<h3><b>ATENÇÃO</b>: ao fazer isto, o ficheiro anterior será substituído pela nova versão. Por favor verifique a sintaxe do ficheiro antes de carregar a nova versão para evitar possíveis problemas.</h3>
			<p></p>
		</li>		<li class="section_break center">
		<label class="description" for="element_8"> </label>
		<div>
			<input id="element_8" name="element_8" class="element file" type="file"/> 
		</div>  
		</li>
			
					<li class="section_break center">
					<input type="hidden" name="file" value="<? echo $file; ?>">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Actualizar tradução" />
		</li>
			</ul>
		</form>	
        
		</div>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>