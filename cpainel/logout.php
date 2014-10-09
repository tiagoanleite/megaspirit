<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Megaspirit</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css"/>
	<link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
	<link rel="stylesheet" href="styles/font-awesome.min.css">
</head>
<?php include "dependences/connection.inc.php"; ?>
<body>

<div class="header">
	<div class="wrapper">
		<div class="top_logo">
			<img src="images/logo.png" height="100%" width="100%"/>
		</div>	
	</div>
</div>
<div class="clear"></div>

<div class="content">
		<div class="wrapper">
           <div class="separator"></div>
           <div class="center">
               <p>Está a ser re-encaminhado para a <a href="<? echo $fowebdir; ?>">página inicial</a>.</p>
<p>Se não for redireccionado dentro de segundos, por favor carregue no link em cima!</p>
</div>
<div class="separator"></div>
<div class="center"><i class="fa fa-spinner fa-spin fa-2x"></i></div>
           <div class="separator"></div>
		</div>
	</div>
    
    <div class="separator"></div>
<div class="clear"></div>
<div class="footer">
	<div class="footer-rights">&copy; 2014 - Megaspirit Unipessoal Lda.</div>
</div>

<?php
	// Initialize the session.
	// If you are using session_name("something"), don't forget it now!
	@session_start();
	
	
	// Unset all of the session variables.
	$_SESSION = array();
	
	// If it's desired to kill the session, also delete the session cookie.
	// Note: This will destroy the session, and not just the session data!
	if (ini_get("session.use_cookies")) {
	    $params = session_get_cookie_params();
	    setcookie(session_name(), '', time() - 42000,
	        $params["path"], $params["domain"],
	        $params["secure"], $params["httponly"]
	    );
	}
	
	// Finally, destroy the session.
	session_destroy();
	
	// Redirects you to the login page
	header('Refresh: 3; URL='.$fowebdir);
	exit();
?>

</body>
</html>