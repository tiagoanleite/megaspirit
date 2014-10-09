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
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; ?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
            
           <div class="options">
           <a href="newcategory.php"><i class="fa fa-pencil-square-o fa-lg"></i> Adicionar nova categoria</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="newproduct.php"><i class="fa fa-pencil-square-o fa-lg"></i> Adicionar novo produto</a>
           </div>
           
           <div class="separator"></div>
               <table class="customtable">
                	
                    <tr><td>Ícone</td><td>Nome</td><td>Visibilidade</td><td colspan="3">Acções</td></tr>
                    
                    <?php
                 		$result = mysql_query("SELECT categories.state, categories.id, categories_lang.title FROM categories, categories_lang WHERE categories_lang.language='pt' AND categories.id = categories_lang.category");
						while($data = mysql_fetch_array($result)) {
							if($data['state'] == 1){
								$state = "<i class=\"fa fa-circle\" style=\"color:green;\"></i>";
							}else{
								$state = "<i class=\"fa fa-circle\" style=\"color:red;\"></i>";
							}
							echo "<tr><td class=\"center\"><img src='".$fowebdir."images/categories/pt/".$data['id'].".jpg' width=140px height=60px /></td><td>".$data['title']."</td><td class=\"center\">".$state."</td><td class=\"center\"><a href='products.php?id=".$data['id']."'><i class=\"fa fa-bars fa-lg\"></i></a></td><td class=\"center\"><a href='editcategory.php?id=".$data['id']."'><i class=\"fa fa-wrench fa-lg\"></i></a></td><td class=\"center\"><a href='deletecategory.php?id=".$data['id']."'><i class=\"fa fa-trash-o fa-lg\"></i></a></td></td>";
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