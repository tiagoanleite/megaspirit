<?php include "control.inc.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
	<link rel="stylesheet" href="styles/font-awesome.min.css">
</head>

<body>

	<!-- chama o as dependências e o menu -->
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; 
		
		$category_id = $_GET['id'];
		
		//Executes query
		$result = mysql_query("SELECT title FROM categories_lang WHERE language='pt' AND id='".$category_id."'");
		//Creates an array with the result
		$data = mysql_fetch_array($result);
		$category_name = $data['title'];
		
	?>
	
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
            
           <div class="options">
           <i class="fa fa-bars fa-lg"></i> A ver todos os produtos da categoria <a href="editcategory.php?id=<? echo $category_id;?>"><? echo $category_name; ?></a><br><div class="separator"></div>
           <a href="catalog.php"><i class="fa fa-reply fa-lg"></i> Voltar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="newproduct.php"><i class="fa fa-pencil-square-o fa-lg"></i> Adicionar novo produto</a>
           </div>
           
           <div class="separator"></div>
               <table class="customtable">
                    <tr><td>Ícone</td><td>Nome</td><td>Visibilidade</td><td colspan="2">Acções</td></tr>
                    
                    <?php
                 		$result = mysql_query("SELECT products.state, products.id, products.category, products_lang.title FROM products, products_lang WHERE products_lang.language='pt' AND products.category='".$category_id."' AND state<2 AND products_lang.product = products.id");
						while($data = mysql_fetch_array($result)) {
							if($data['state'] == 1){
								$state = "<i class=\"fa fa-circle\" style=\"color:green;\"></i>";
							}else{
								$state = "<i class=\"fa fa-circle\" style=\"color:red;\"></i>";
							}
							echo "<tr><td class=\"center\"><img src='".$fowebdir."images/products/".$data['id'].".jpg' width=140px height=60px /></td><td>".$data['title']."</td><td class=\"center\">".$state."</td><td class=\"center\"><a href='editproduct.php?id=".$data['id']."'><i class=\"fa fa-wrench fa-lg\"></i></a></td><td class=\"center\"><a href='deleteproduct.php?id=".$data['id']."'><i class=\"fa fa-trash-o fa-lg\"></i></a></td></td>";
						}
                 	?>
                </table>

                
                
                
           <div class="separator"></div>
		</div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>