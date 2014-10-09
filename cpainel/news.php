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
           <a href="newnews.php"><i class="fa fa-pencil-square-o fa-lg"></i> Adicionar nova notícia</a>
           </div>
           
           <div class="separator"></div>
               <table class="customtable">
                    <tr><td>Imagem</td><td>Título</td><td>Data</td><td colspan="3">Acções</td></tr>
                 	<?php
                 		$result = mysql_query("SELECT news.id, news.date, news_lang.news, news_lang.language, news_lang.title FROM news, news_lang WHERE news.id = news_lang.news AND news_lang.language = 'pt' ORDER BY news.date DESC, news_lang.title ASC");
						while($data = mysql_fetch_array($result)) {
							echo "<tr><td class=\"center\"><img src='".$fowebdir."images/news/".$data[0].".jpg' width=190px height=80px /></td><td>".$data[4]."</td><td class=\"center\">".$data[1]."</td><td class=\"center\"><a href='".$fowebdir."post.php?id=".$data['id']."'><i class=\"fa fa-external-link fa-lg\"></i></a></td><td class=\"center\"><a href='editnews.php?id=".$data['id']."'><i class=\"fa fa-wrench fa-lg\"></i></a></td><td class=\"center\"><a href='deletenews.php?id=".$data['id']."'><i class=\"fa fa-trash-o fa-lg\"></i></a></td></td>";
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