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
		$category_id = $_GET['id'];
			
		$result = mysql_query("SELECT * FROM categories_lang WHERE category='".$category_id."' AND language='pt'");
		$data = mysql_fetch_array($result);
		$title_pt = $data['title'];
		
		$result = mysql_query("SELECT * FROM categories_lang WHERE category='".$category_id."' AND language='en'");
		$data = mysql_fetch_array($result);
		$title_en = $data['title'];
		
		$result = mysql_query("SELECT * FROM categories WHERE id='".$category_id."'");
		$data = mysql_fetch_array($result);
		$state = $data['state'];
		
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_852641" class="appnitro" enctype="multipart/form-data" method="post" action="addcategory.php">
					<div class="form_description">
			<h2>Actualizar categoria</h2>
			<p>Alterar categoria <b></b></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Título </label>
		<span>
			<input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="20" value="<? echo $title_pt; ?>"/>
			<label>Português</label>
		</span>
		<span>
			<input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="20" value="<? echo $title_en; ?>"/>
			<label>Inglês</label>
		</span><p class="guidelines" id="guide_1"><small>Insira o título da categoria a criar</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Miniatura (PT) </label>
		<div>
			<input id="element_2" name="element_2" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_2"><small>Insira a miniatura a utilizar no catálogo Português</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Miniatura (EN) </label>
		<div>
			<input id="element_3" name="element_3" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_3"><small>Insira a miniatura a utilizar no catálogo internacional</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Estado </label>
		<span>
			<?php
	if($state==1){
		echo "<input id=\"element_9_1\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"1\" checked=\"checked\"/>
		<label class=\"choice\" for=\"element_9_1\">Activa</label>
		<input id=\"element_9_2\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"0\" />
		<label class=\"choice\" for=\"element_9_2\">Inactiva</label>";
	}else{
		echo "<input id=\"element_9_1\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"1\"/>
		<label class=\"choice\" for=\"element_9_1\">Activa</label>
		<input id=\"element_9_2\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"0\" checked=\"checked\" />
		<label class=\"choice\" for=\"element_9_2\">Inactiva</label>";
	} ?>

		</span><p class="guidelines" id="guide_4"><small>Define a visibilidade ao público</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="852641" />
			    <inout type='hidden' name="category_id" value="<? echo $category_id; ?>">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Actualizar categoria">
				<input id="saveForm" class="button_text" type="reset" name="reset" value="Reiniciar">
		</li>
			</ul>
		</form>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>