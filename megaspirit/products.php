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
			
			<!-- imagem de capa -->
			<div class="cover">
				<img src="images/covers/products.jpg" height="250px" width="990px"/>
			</div>
			<div class="clear"></div>
			
			<!-- titulo da página -->
			<div class="page_title"><? echo $translate_header['products']; ?></div>
			<div class="clear"></div>
			
			<!-- código inicial 
			<div class="animal-menu">
				<div class="animal-menu-item">
					<img src="images/products/1.png" width="280" height="120" alt="Porco" />
				</div>
				<div class="animal-menu-item">
					<img src="images/products/2.png" width="280" height="120" alt="Porco" /> 
				</div>
				<div class="animal-menu-item">
					<img src="images/products/3.png" width="280" height="120" alt="Porco" />
				</div>
			</div> -->
			
			<!-- menu -->
			<!-- TODO: falta corrigir a divisão por 3!!! -->
			<?php
				include "dependences/connection.inc.php";
				$result = mysql_query("SELECT categories.id, categories.state, categories_lang.title, categories_lang.language FROM categories, categories_lang WHERE categories.id = categories_lang.category AND categories_lang.language = '".$_SESSION['language']."' AND categories.state = 1 ORDER BY categories_lang.title"); ?>
				<div class="animal-menu">
				
				<?php
					$x=0;
					while($data = mysql_fetch_array($result)) {
						$id = $data["id"];
						/*$x = $x +1;
						echo $x; 
						if (($x=0)||($x%3==1)){
							echo "<div class='animal-menu'>";
						}*/
						?>
				<div class="animal-menu-item">
					<a href="productlist.php?id=<?php echo $data['id']; ?>"><img src="images/categories/<?php echo $data['language']."/".$data['id'].".jpg"; ?>" width="280" height="120" alt="<?php echo $data['title']; ?>" /></a>
				</div>
						<?php
						/*if (($x=0)||($x%3==1)){
							echo "</div>";
						}*/
				 } ?>
				 </div>

			
			<div class="clear"></div>
		</div>
		<div class="separator"></div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include "footer.inc.php"; ?>
	
</body>