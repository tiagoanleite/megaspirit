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
	<?php include "actions/translator.inc.php"; include "menu.inc.php"; include "dependences/connection.inc.php"; $category = $_GET['id']; ?>

	<!-- topo -->
	<div class="cenas">
		<div class="wrapper">
		</div>
	</div>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
			
			<!-- imagem de capa -->
			<div class="cover">
				<img src="images/covers/products.jpg" height="250px" width="990px"/>
			</div>
			<div class="clear"></div>
			
			<!-- titulo da página -->
			<?php
				$result = mysql_query("SELECT title FROM categories_lang WHERE language = '".$_SESSION['language']."' AND category = '".$category."'");
				$data = mysql_fetch_array($result);
				$category_title = $data["title"];
			?>
			<div class="page_title"><? echo $category_title; ?></div>
			<div class="clear"></div>
			
			<?php
				$result = mysql_query("SELECT products.id, products_lang.title, products_lang.language, products.state FROM products, products_lang WHERE products.id = products_lang.product AND products_lang.language = '".$_SESSION['language']."' AND products.category = '".$category."' AND products.state = '1'");
				while ($data = mysql_fetch_array($result)){?>
					<img src="images/products/<?php echo $data['id'].".jpg"; ?>" width="280" height="120" alt="<?php echo $data['title'];?>" />
				<?php echo $data['title']; } ?>
			
			
			<div class="clear"></div>
		</div>
		<div class="separator"></div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>
	
</body>