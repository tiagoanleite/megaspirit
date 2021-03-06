<?php include "control.inc.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="styles/form.css" media="all">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
	<script type="text/javascript" src="scripts/form.js"></script>
</head>

<body>

	<!-- chama o as dependências e o menu -->
	<?php include "dependences/connection.inc.php"; include $filedir."dependences/menu.inc.php"; $company_id = $_GET['id']; 
		
		$result = mysql_query("SELECT * FROM customers WHERE id='".$company_id."'");
		$data = mysql_fetch_array($result);
		$state = $data['state'];
	?>
	
	<!-- início do corpo -->
	<div class="content">
		<div class="wrapper">
		<form id="form_867204" class="appnitro"  method="post" action="updatecustomer.php">
					<div class="form_description">
			<h2>Perfil de cliente</h2>
			<p>Actualize o perfil de cliente de <b><? echo $data['company']; ?></b></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Empresa </label>
		<div>
			<input id="element_1" name="element_1" class="element text large" type="text" maxlength="255" value="<? echo $data['company']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>Nome da empresa a facturar</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">NIF </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value="<? echo $data['nif']; ?>"/> 
		</div><p class="guidelines" id="guide_2"><small>Número de identificação fiscal para facturação</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Username </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="<? echo $data['username']; ?>"/> 
		</div><p class="guidelines" id="guide_3"><small>Nome de utilizador para acesso à área reservada</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Password </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="password" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_4"><small>Palavra chave de acesso à área reservada. Por favor deixe em branco caso não pretenda actualizar a password.</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Representante </label>
		<div>
			<input id="element_5" name="element_5" class="element text large" type="text" maxlength="255" value="<? echo $data['rep']; ?>"/> 
		</div><p class="guidelines" id="guide_5"><small>Nome do gestor de encomendas da empresa</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Email </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value="<? echo $data['email']; ?>"/> 
		</div><p class="guidelines" id="guide_6"><small>Email de contacto</small></p> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Telefone </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value="<? echo $data['phone']; ?>"/> 
		</div><p class="guidelines" id="guide_7"><small>Número de telefone para contacto </small></p> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Endereço </label>
		
		
		<!-- start of the address info -->
		<?php
			$result = mysql_query("SELECT * FROM addresses WHERE company='".$company_id."' AND type='0'");
			$data = mysql_fetch_array($result);
		?>
		
		<div>
			<input id="element_8_1" name="element_8_1" class="element text large" value="<? echo $data['line1']; ?>" type="text">
			<label for="element_8_1">Linha 1</label>
		</div>
	
		<div>
			<input id="element_8_2" name="element_8_2" class="element text large" value="<? echo $data['line2']; ?>" type="text">
			<label for="element_8_2">Linha 2</label>
		</div>
	
		<div class="left">
			<input id="element_8_3" name="element_8_3" class="element text medium" value="<? echo $data['city']; ?>" type="text">
			<label for="element_8_3">Cidade</label>
		</div>
	
		<div class="right">
			<input id="element_8_4" name="element_8_4" class="element text medium" value="<? echo $data['region']; ?>" type="text">
			<label for="element_8_4">Estado | Província | Região</label>
		</div>
	
		<div class="left">
			<input id="element_8_5" name="element_8_5" class="element text medium" maxlength="15" value="<? echo $data['postal']; ?>" type="text">
			<label for="element_8_5">Código Postal</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_8_6" name="element_8_6">
			<option selected="yes" value="<? echo $data['country']; ?>" ><? echo $data['country']; ?></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_8_6">País</label>
	</div><p class="guidelines" id="guide_8"><small>Endereço de facturação para emissão de facturas</small></p> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Estado da conta </label>
		<span>
<?php
	if($state==1){
		echo "<input id=\"element_9_1\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"1\" checked=\"checked\"/>
		<label class=\"choice\" for=\"element_9_1\">Activa</label>
		<input id=\"element_9_2\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"0\" />
		<label class=\"choice\" for=\"element_9_2\">Inactiva</label>";
	}else{
		echo "<input id=\"element_9_1\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"1\"/>
		<label class=\"choice\" for=\"element_9_1\">Activa</label>
		<input id=\"element_9_2\" name=\"element_9\" class=\"element radio\" type=\"radio\" value=\"0\" checked=\"checked\" />
		<label class=\"choice\" for=\"element_9_2\">Inactiva</label>";
	} ?>
	
		</span><p class="guidelines" id="guide_9"><small>Permitir ou revogar acesso à conta por parte do utilizador</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="852641" />
			    <input type="hidden" name="company_id" value="<? echo $company_id; ?>">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Actualizar informações">
				<input id="saveForm" class="button_text" type="reset" name="reset" value="Reverter">
		</li>
			</ul>
		</form>
    </div>

	<!-- fim do corpo -->
	
	<!-- chama o rodapé -->
	<?php include $filedir."dependences/footer.inc.php"; ?>
	
</body>