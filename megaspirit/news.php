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

	<!-- topo -->
	<div class="cenas">
		<div class="wrapper">
		</div>
	</div>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
			
			<!-- titulo da página -->
			<div class="page_title"><? echo $translate_header['news']; ?></div>
			<div class="clear"></div>
			
			<!-- lista -->
			<?php include "dependences/connection.inc.php"; $result = mysql_query("SELECT news.id, news.date, news_lang.title FROM news, news_lang WHERE news.id = news_lang.news AND news_lang.language = '".$_SESSION['language']."' ORDER BY news.date DESC"); ?>
			<div class="news-list">	
				<?php while($data = mysql_fetch_array($result)) { $id = $data["id"];?>
				<div class="news-item">
					<div class="news-item-image"><a href="post.php?id=<?php echo $id;?>"><img src="images/news/<?php echo $id;?>.jpg" width="190" height="80" alt="Notícia" /></a></div>
					<div class="news-item-detail">
						<div class="news-item-title"><a href="post.php?id=<?php echo $id;?>"><?php echo $data["title"];?></a></div>
						<div class="news-item-resume"><?php echo $data["date"];?></div>
					</div>
				</div>
				<div class="separator"></div>
			<?php } ?>

			<!-- código original -->
			<!--<div class="news-list">	
			
				<div class="news-item">
					<div class="news-item-image"><a href="post.php"><img src="images/not1.png" width="190" height="80" alt="Notícia" /></a></div>
					<div class="news-item-detail">
						<div class="news-item-title"><a href="post.php">Lorem ipsum dolores sit amet</a></div>
						<div class="news-item-resume">oqihtq3 t2uio34tb2h34 t234t234t 23it 23i4t2i34ht 234te rtr yf56uy457u475fu7 467fu 467fu 46we</div>
					</div>
				</div>
				<div class="separator"></div>

				<div class="news-item">
					<div class="news-item-image"><a href="post.php"><img src="images/not1.png" width="190" height="80" alt="Notícia" /></a></div>
					<div class="news-item-detail">
						<div class="news-item-title"><a href="post.php">Lorem ipsum dolores sit amet</a></div>
						<div class="news-item-resume">oqihtq3 t2uio34tb2h34 t234t234t 23it 23i4t2i34ht 234te rtr yf56uy457u475fu7 467fu 467fu 46we</div>
					</div>
				</div>
				<div class="separator"></div>
				
				<div class="news-item">
					<div class="news-item-image"><a href="post.php"><img src="images/not1.png" width="190" height="80" alt="Notícia" /></a></div>
					<div class="news-item-detail">
						<div class="news-item-title"><a href="post.php">Lorem ipsum dolores sit amet</a></div>
						<div class="news-item-resume">oqihtq3 t2uio34tb2h34 t234t234t 23it 23i4t2i34ht 234te rtr yf56uy457u475fu7 467fu 467fu 46we</div>
					</div>
				</div>
				<div class="separator"></div>-->
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="separator"></div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>
	
</body>