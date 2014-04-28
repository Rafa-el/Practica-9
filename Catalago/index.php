<!DOCTYPE HTML>
<?php
session_start();
require_once ("Tabla.php");
require_once ("funciones.php");

		if($_POST['usuario'] == "root" && $_POST['pass'] =="admin"){
			
			if(!isset($_SESSION['usuario']) && !isset($_SESSION['pass']) ){
				$_SESSION['usuario'] = "root";
				$_SESSION['pass'] = "admin";
			};
		
		}else if(isset($_SESSION['usuario']) && isset($_SESSION['pass']) ){

		}else{
			header('Location: /Catalago/login.php');
		};

?>
<html>

	<title>Practica 8</title>
	<h4><p align="center";>Practica 8</p></h4>
	<body>
	<?php
		$obj = new funciones();
		$result = $obj->obtenerTodos();
		$tabla = new Tabla();
		$tabla->producto = $result;
		$tabla->creaTabla();
		echo "<a href = '/Catalago/cerrar.php'>Cerrar sesion</a>";
	?>
	</body>

</html>