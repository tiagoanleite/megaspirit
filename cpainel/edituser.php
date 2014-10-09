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
	$user_id = $_GET['id']; 	
	$result = mysql_query("SELECT * FROM users WHERE id='".$user_id."'");
	$data = mysql_fetch_array($result);
	?>
	
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form class="appnitro" method="post" action="updateuser.php">
		<div class="form_description">
			<h2>Editar utilizador</h2>
			<p>Editar as informações do utilizador <b><? echo $data['name']; ?></b> (<? echo $data['username']; ?>)</p>
		</div>						
			<ul>
			
					<li id="li_1">
		<label class="description" for="element_1">Nome </label>
		<span>
			<input id="element_1_1" name="element_1_1" class="element text" maxlength="255" size="60" value="<? echo $data['name']; ?>">
		</span>
		<p class="guidelines" id="guide_1"><small>Insira o nome real do utilizador</small></p> 
		</li>		<li id="li_2">
		<label class="description" for="element_2">Username </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value="<? echo $data['username']; ?>"> 
		</div><p class="guidelines" id="guide_2"><small>Insira o nome de utilizador</small></p> 
		</li>		<li id="li_3">
		<label class="description" for="element_3">Email </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="<? echo $data['email']; ?>"> 
		</div><p class="guidelines" id="guide_3"><small>Insira o endereço electrónico do utilizador</small></p> 
		</li>		<li id="li_4">
		<label class="description" for="element_4">Password </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="password" maxlength="255" value=""> 
		</div><p class="guidelines" id="guide_4"><small>Insira a password para acesso à conta. Caso não deseje alterar a password, deixei este campo em branco.</small></p> 
		</li>		<li id="li_5">
		<label class="description" for="element_5">Estado da conta </label>
		<span>
			<?php
	if($data['state']==1){
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

		</span><p class="guidelines" id="guide_5"><small>Utilize esta opção para activar ou desactivar o acesso à conta em questão</small></p> 
		</li>		
			
		<li class="buttons">
			<input type="hidden" name="user_id" value="<? echo $user_id; ?>">
			<input id="saveForm" class="button_text" type="submit" name="submit" value="Alterar utilizador">
			<input id="saveForm" class="button_text" type="submit" name="submit" value="Limpar">
		</li>
			</ul>
		</form>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>