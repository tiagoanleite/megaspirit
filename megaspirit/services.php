<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
</head>

<body>

	<!-- chama o menu -->
	<?php include "actions/translator.inc.php"; include "menu.inc.php"; ?>
	
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
			
			<!-- imagem de capa -->
			<div class="cover">
				<img src="images/covers/services.jpg" height="250px" width="990px"/>
			</div>
			<div class="clear"></div>
			
			<!-- titulo da página -->
			<div class="page_title"><? echo $translate_header['about']; ?></div>
			<div class="clear"></div>
			
			<!-- texto -->
			<div class="text">
				<? echo $translate_services['about']; ?>
			</div>
			
			<!-- apresentação -->
			<div class="presentation">
				<div class="presentation-item">
					<div class="presentation-pic"> <img src="images/simbols/globe.png" width="32" height="32" alt="Agentes" /> </div>
					<div class="presentation-title"><? echo $translate_index['title1']; ?></div>
					<div class="presentation-text"><? echo $translate_index['text1']; ?></div>
				</div>
				<div class="presentation-item">
					<div class="presentation-pic"> <img src="images/simbols/trade.png" width="32" height="32" alt="Trading" /> </div>
					<div class="presentation-title"><? echo $translate_index['title2']; ?></div>
					<div class="presentation-text"><? echo $translate_index['text2']; ?></div>
				</div>
				<div class="presentation-item">
					<div class="presentation-pic"> <img src="images/simbols/truck.png" width="32" height="32" alt="Importação" /> </div>
					<div class="presentation-title"><? echo $translate_index['title3']; ?></div>
					<div class="presentation-text"><? echo $translate_index['text3']; ?></div>
				</div>        
			</div>
			<div class="clear"></div>
		</div>
		<div class="separator"></div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>
	
</body>