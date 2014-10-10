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
				<img src="images/covers/index.jpg" height="250px" width="990px"/>
			</div>
			<div class="clear"></div>

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
			
			<!-- notícias -->
			<div class="news-module">
				<div class="title"><? echo $translate_header['news']; ?></div>
				<?php include "dependences/connection.inc.php"; $result = mysql_query("SELECT news.id, news_lang.title FROM news, news_lang WHERE news.id = news_lang.news AND news_lang.language = '".$_SESSION['language']."' ORDER BY news.date DESC LIMIT 0,3"); while($data = mysql_fetch_array($result)) { $id = $data["id"];?>
	            <div class="news-module-item">
	            	<div class="news-module-pic"><a href="post.php?id=<?php echo $id;?>"><img src="images/news/<?php echo $id;?>.jpg" width="320" height="100" alt="Capa de notícia" /></a> </div>
	                <div class="news-module-title"><a href="post.php?id=<?php echo $id;?>"><? echo $data["title"]; ?></a></div>
	            </div>
				<?php } ?>
	        </div>
	        <div class="clear"></div>
	        
	        <!-- banner -->
	        <div class="pub">
	        	<? $result = mysql_query("SELECT * FROM banners WHERE active = 1 ORDER BY rand() LIMIT 0,1"); $data = mysql_fetch_array($result); ?>
	        	<a href="<? echo $data["link"]; ?>"><img src="images/banners/<? echo $data["id"]; ?>.jpg" width="990px" height="150px"/></a>
	        </div>
			<div class="separator"></div>
			
		</div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>
	
</body>