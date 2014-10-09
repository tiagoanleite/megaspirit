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
           Detalhes da encomenda: <b>X87S6DF</b>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="neworder.php"><i class="fa fa-reply fa-lg"></i> Voltar à listagem</a>
           </div>
           
           <div class="separator"></div>
           <hr>
           
           <div class="separator"></div>
               <table class="customtable">
                    <tr><td>Data</td><td>Categoria</td><td>Produto</td><td>Quantidade</td><td>Local de entrega</td><td>Data limite</td></tr>
                    <tr><td class="center">27/Jun/2014</td><td class="center">Vaca</td><td class="center">Bife</td><td class="center">50,000kg</td><td class="center">Pavilhão A</td><td class="center">2/Jul/2014</td></tr>
               </table>
           
           <div class="text">
	           <p><b>Notas:</b><br>
	           Pretendemos carne com pouco teor de gordura e o mais tenras possíveis pois são para crianças até aos 6 anos.</p>
           </div>
           
           <div class="separator"></div>
           <hr>
           <div class="separator"></div>
           <div class="title">Proposta 1</div>
           
           <table class="customtable">
                    <tr><td>Data</td><td>Quantidade</td><td>Origem</td><td>Valor</td><td>Data de entrega</td><td>Duração da proposta</td><td colspan="2">Acções</td></tr>
                    <tr><td class="center">27/Jun/2014</td><td class="center">55,000kg</td><td class="center">Brasil</td><td class="center">200,00€</td><td class="center">1/Jun/2014</td><td class="center">2 dias restantes</td><td class="center"><i class="fa fa-check"></i></td><td class="center"><i class="fa fa-times"></i></td></tr>
               </table>
           
           <div class="separator"></div>
           
		</div>
	</div>
	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>