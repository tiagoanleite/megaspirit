<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
</head>

<body>

	<!-- chama o menu, recebe o ID da página e procura as informações-->
	<?php 
		include "actions/translator.inc.php"; include "menu.inc.php";
		$id = $_GET['id'];
		include "dependences/connection.inc.php";
		$result = mysql_query("SELECT news.date, news_lang.title, news_lang.text FROM news, news_lang WHERE news.id =".$id." AND news.id = news_lang.news AND news_lang.language = '".$_SESSION['language']."'");
		$data = mysql_fetch_array($result);
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
			
			<!-- titulo da página -->
			<div class="page_title"><? echo $data["title"]; ?></div>
			<div class="separator"></div>
			<div class="clear"></div>
			
			<!-- imagem da notícia -->
			<div class="center">
				<img src="images/news/<? echo $id; ?>.jpg" width="640" height="200" alt="Notícia" />
			</div>
			<div class="clear"></div>
			
			<div class="text"><? echo $data["text"]; ?></div>
			<div class="clear"></div>
			<div class="separator"></div>
			<div class="text"><? echo $translate_news['date']." ".$data["date"]; ?></div>

		</div>
		<div class="separator"></div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>
	
</body>