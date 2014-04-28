<?php
	require_once("funciones.php");
	$id=$_GET['id'];
	$obj = new funciones();
	$resultado = $obj->buscarProducto($id);
?>

<!DOCTYPE html>
<html>
	<H4><P align = "Center">Ver producto</P></H4>
	<?php
		echo "<b> ID: </b> " . $resultado["id"] . "<br>";
		echo "<b> Clave: </b>" . $resultado["clave"] . "<br>";
		echo "<b> Nombre: </b>" . $resultado["nombre"] . "<br>";
		echo "<b> Descripcion: </b>" . $resultado["descripcion"] . "<br>";
		echo "<b> Precio: </b>" . $resultado["precio"] . "<br>";
	?>
	<br>

	<a href="index.php"><img src="atras.jpeg" width="35" height="30"></a>
</html>