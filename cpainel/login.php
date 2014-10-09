<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Megaspirit</title>

<link rel="stylesheet" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="styles/general.css"/>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="scripts/placeholder.js"></script>

</head>

<body>
	
	<div class="header">
	<div class="wrapper">
		<div class="top_logo">
			<img src="images/logo.png" height="100%" width="100%"/>
		</div>	
	</div>
</div>
<div class="clear"></div>

	<form id="slick-login" method="post" action="dologin.php">
		<label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="username">
		<label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="password">
		<input type="submit" value="Entrar">
	</form>
	
	
</body>

</html>