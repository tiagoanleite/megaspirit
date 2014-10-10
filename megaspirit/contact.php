<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
</head>

<body>

	<!-- chama o menu e o ficheiro com as linguas -->
	<?php include "actions/translator.inc.php"; include "menu.inc.php"; ?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
			
			<!-- imagem de capa -->
			<div class="cover">
				<img src="images/covers/contact.jpg" height="250px" width="990px"/>
			</div>
			<div class="clear"></div>
			
			<!-- titulo da página -->
			<div class="page_title"><? echo $translate_contact['catch']; ?></div>
			<div class="clear"></div>

			<!-- formulário de contacto à esquerda -->
			<div class="contact-form">
			<form action="actions/send_contact.php" method="post">
		    	
		    	<p><? echo $translate_contact['name']; ?><br>
				<input type="text" name="name" size="48"></p>
				
				<p><? echo $translate_contact['email']; ?><br>
				<input type="text" name="email" size="48"></p>
				
				<p><? echo $translate_contact['message']; ?><br>
				<textarea rows="10" cols="50"></textarea><p/>
				
				<input type="reset" value="<? echo $translate_contact['send']; ?>" /> <input type="reset" value="<? echo $translate_contact['delete']; ?>" /></center>
		    	
		    	<!-- Início da experiência nº1 -->
		    	
		    	<!--<table>
					<tr>
					  <td>Nome:</td>
					  <td><input type="text" name="name" size="48">
					</tr>
					<tr>
					  <td>Email:</td>
					  <td><input type="text" name="email" size="48">
					</tr>
					<tr>
						<td>Mensagem:</td>
						<td><textarea rows="10" cols="50"></textarea></td>
					</tr>
					<tr>
						<td></td><td><input type="submit" value="Enviar" /> <input type="reset" value="Limpar" /></td>
					</tr>
				</table> -->
				
				<!-- Fim da experiência nº1 -->
				
			</form>
			</div>
			
			<!-- informações de contacto à direta -->
			<div class="contact-info">
				<div class="page_title"><? echo $contactinfo["company"]; ?></div>
				
				<p><? echo $contactinfo["address1"]; ?><br>
				<? echo $contactinfo["address2"]; ?></p>
				
				<p><b><? echo $translate_contact['mobile']; ?></b> <? echo $contactinfo["mobile"]; ?><br>
				<b><? echo $translate_contact['phone']; ?></b> <? echo $contactinfo["phone"]; ?></p>
				
				<p><b><? echo $translate_contact['email']; ?></b> <a href="mailto:<? echo $contactinfo["email"]; ?>"><? echo $contactinfo["email"]; ?></a></p>
			</div>
			
			<div class="clear">
		</div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>

</body>