<!DOCTYPE html>
<?php
	session_start();
?>
<head>
	<title>Iniciar sesion</title>
</head>
<?php
		if(isset($_SESSION['usuario']) && isset($_SESSION['pass'])){
			header('Location: /Catalago/index.php');
		};
	?>
<html>
	
	<body>
	<form method = "POST" action = "index.php">	
		Usuario	</br>
		<input type = "text" name = "usuario" size = "10" maxlength= "10"></br></br>
		Contrase&ntilde;a </br>
		<input type = "password" name = "pass" size = "10" maxlength = "10"></br>
		<input type = "submit" value= "Entrar">
		
	</form>
	</body>
	
</html>
