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
		$product_id = $_GET['id'];
			
		$result = mysql_query("SELECT * FROM products_lang WHERE product='".$product_id."' AND language='pt'");
		$data = mysql_fetch_array($result);
		$title_pt = $data['title'];
		
		$result = mysql_query("SELECT * FROM products_lang WHERE product='".$product_id."' AND language='en'");
		$data = mysql_fetch_array($result);
		$title_en = $data['title'];
		
		$result = mysql_query("SELECT * FROM products WHERE id='".$product_id."'");
		$data = mysql_fetch_array($result);
		$state = $data['state'];
		$category_id = $data['category'];
		
		$result = mysql_query("SELECT title FROM categories_lang WHERE id='".$category_id."' and language='pt'");
		$data = mysql_fetch_array($result);
		$category_title = $data['title'];
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_852641" class="appnitro" enctype="multipart/form-data" method="post" action="updateproduct.php">
					<div class="form_description">
			<h2>Actualizar produto</h2>
			<p>Actualizar as informações de <b><? echo $title_pt; ?></b></p>
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
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Categoria </label>
		<div>
		<select class="element select medium" id="element_5" name="element_5"> 
			<option value="<? echo $category_id; ?>" selected="selected"><? echo $category_title; ?></option>
			<?php
                 		$result = mysql_query("SELECT categories.id, categories_lang.title FROM categories, categories_lang WHERE categories.id = categories_lang.category AND categories_lang.language='pt' AND categories.state <2 ORDER BY categories_lang.title");
						while($data = mysql_fetch_array($result)) {
							echo "<option value=\"".$data[0]."\" >".$data[1]."</option>";
						}
			?>


		</select>
		</div><p class="guidelines" id="guide_5"><small>Insira sob qual categoria pretende inserir este produto</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Miniatura</label>
		<div>
			<input id="element_2" name="element_2" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_2"><small>Insira a miniatura a utilizar no catálogo</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Estado </label>
		<span>
			<?php
	if($state==1){
		echo "<input id=\"element_9_1\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"1\" checked=\"checked\"/>
		<label class=\"choice\" for=\"element_9_1\">Activo</label>
		<input id=\"element_9_2\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"0\" />
		<label class=\"choice\" for=\"element_9_2\">Inactivo</label>";
	}else{
		echo "<input id=\"element_9_1\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"1\"/>
		<label class=\"choice\" for=\"element_9_1\">Activo</label>
		<input id=\"element_9_2\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"0\" checked=\"checked\" />
		<label class=\"choice\" for=\"element_9_2\">Inactivo</label>";
	} ?>

		</span><p class="guidelines" id="guide_4"><small>Define a visibilidade ao público</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="852641" />
			    <input type="hidden" name="product_id" value="<? echo $product_id;?>" >
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Actualizar produto">
				<input id="saveForm" class="button_text" type="reset" name="reset" value="Reiniciar">
		</li>
			</ul>
		</form>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>