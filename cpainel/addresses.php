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
		
		$company_id = $_GET['id'];
		
		//Executes query
		$result = mysql_query("SELECT company FROM customers WHERE id='".$company_id."'");
		//Creates an array with the result
		$data = mysql_fetch_array($result);
		$company_name = $data['company'];
		
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
			<div class="separator"></div>
            
           <div class="options">
	           <i class="fa fa-truck fa-lg"></i> A ver todas as moradas de entrega de <a href="editcustomer.php?id=<?php echo $company_id;?>"><?php echo $company_name; ?></a><br><div class="separator"></div>
	           <a href="customers.php"><i class="fa fa-reply fa-lg"></i> Voltar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="newaddress.php?id=<? echo $company_id; ?>"><i class="fa fa-pencil-square-o fa-lg"></i> Adicionar novo endereço</a>
           </div>
           
           <div class="separator"></div>

           <table class="customtable">
                <tr><td>Alcunha</td><td>Rua</td><td>Cidade</td><td>País</td><td colspan="2">Acções</td></tr>
                <?php
             		$result = mysql_query("SELECT * FROM addresses WHERE company = '".$company_id."' AND state = 1 ORDER BY type");
					while($data = mysql_fetch_array($result)) {
						
						if($data['type'] == 0){
							$nick = "Morada de facturação";
							
							echo "<tr><td>Morada de facturação</td><td>".$data['line1']."</td><td>".$data['city']."</td><td>".$data['country']."</td><td class=\"center\" colspan=\"2\"><a href='editcustomer.php?id=".$company_id."'><i class=\"fa fa-wrench fa-lg\"></i></a></td></tr>";
						}else{
							echo "<tr><td>".$data['nick']."</td><td>".$data['line1']."</td><td>".$data['city']."</td><td>".$data['country']."</td><td class=\"center\"><a href='editaddress.php?id=".$data['id']."'><i class=\"fa fa-wrench fa-lg\"></i></a></td><td class=\"center\"><a href='deleteaddress.php?id=".$data['id']."&customer=.".$company_id."'><i class=\"fa fa-trash-o fa-lg\"></i></a></td></td>";			
						}
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