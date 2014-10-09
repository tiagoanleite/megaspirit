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
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; 
		$news_id = $_GET['id']; 	
		$result = mysql_query("SELECT * FROM news_lang WHERE news='".$news_id."' AND language='pt'");
		$data = mysql_fetch_array($result);
		
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_868072" class="appnitro" enctype="multipart/form-data" method="post" action="updatenews.php">
					<div class="form_description">
			<h2>Actualizar notícia</h2>
			<p>Editar notícia <b>"<? echo $data['title']; ?>"</b></p>
		</div>						
			<ul >
			
					<li class="section_break">
			<h3>Informação em Português</h3>
			<p></p>
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Título </label>
		<div>
			<input id="element_1" name="element_1" class="element text large" type="text" maxlength="255" value="<? echo $data['title']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>Título da notícia em Português</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Descrição </label>
		<div>
			<textarea id="element_2" name="element_2" class="element textarea medium"><? echo $data['text']; ?></textarea> 
		</div><p class="guidelines" id="guide_2"><small>Corpo da notícia em Português. Caso pretenda formatar o texto, por favor recorra a tags HTML.</small></p> 
		</li>		<li class="section_break">
			<h3>Informação em Inglês</h3>
			<?php
			$news_id = $_GET['id']; 	
		$result = mysql_query("SELECT * FROM news_lang WHERE news='".$news_id."' AND language='en'");
		$data = mysql_fetch_array($result);
		?>
			<p></p>
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Título </label>
		<div>
			<input id="element_5" name="element_5" class="element text large" type="text" maxlength="255" value="<? echo $data['title']; ?>"/> 
		</div><p class="guidelines" id="guide_5"><small>Título da notícia em Inglês</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Descrição </label>
		<div>
			<textarea id="element_6" name="element_6" class="element textarea medium"><? echo $data['text']; ?></textarea> 
		</div><p class="guidelines" id="guide_6"><small>Corpo da notícia em Inglês. Caso pretenda formatar o texto, por favor recorra a tags HTML.</small></p> 
		</li>		<li class="section_break">
			<h3></h3>
			<p></p>
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Capa da notícia </label>
		<div>
			<input id="element_8" name="element_8" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_8"><small>Insira a capa da notícia com 640 por 200 e em formato .jpg</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="news_id" value="<? echo $news_id;?>"?>
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Actualizar notícia" />
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