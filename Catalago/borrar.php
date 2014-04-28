<?php
require_once("funciones.php");
	
	$ID=$_GET["id"];
	$funcion = new funciones();
	$funcion->borrar($ID);
?>