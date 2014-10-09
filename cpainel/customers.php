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
           <a href="newcustomer.php"><i class="fa fa-pencil-square-o fa-lg"></i> Adicionar novo cliente</a>
           </div>
           
           <div class="separator"></div>


               <table class="customtable">
                    <tr><td>Nome</td><td>Contribuinte</td><td>Representante</td><td>Telefone</td><td>Estado</td><td colspan="4">Acções</td></tr>
                    
                               <?php
                 		$result = mysql_query("SELECT * FROM customers");
						while($data = mysql_fetch_array($result)) {
							if($data['state'] == 0){
								$state = "Inactivo";
							}else{
								$state = "Activo";					
								
							}

							echo "<tr><td class=\"center\">".$data['company']."</td><td>".$data['nif']."</td><td>".$data['rep']."</td><td>".$data['phone']."</td><td class=\"center\">".$state."</td><td class=\"center\"><a href='mailto:".$data['email']."'><i class=\"fa fa-envelope fa-lg\"></i></a></td><td class=\"center\"><a href='addresses.php?id=".$data['id']."'><i class=\"fa fa-truck fa-lg\"></i></a></td><td class=\"center\"><a href='editcustomer.php?id=".$data['id']."'><i class=\"fa fa-wrench fa-lg\"></i></a></td><td class=\"center\"><a href='deletecustomer.php?id=".$data['id']."'><i class=\"fa fa-trash-o fa-lg\"></i></a></td></td>";
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