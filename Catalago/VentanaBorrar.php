<?php
	require_once("funciones.php");
	$id=$_GET['id'];
	$obj = new funciones();
	$resultado = $obj->buscarProducto($id);
?>

<!DOCTYPE html>
<html>
	<H4><P align = "Center">Borrar producto</P></H4>
	<?php
		echo "<b> ID: </b> " . $resultado["id"] . "<br>";
		echo "<b> Clave: </b>" . $resultado["clave"] . "<br>";
		echo "<b> Nombre: </b>" . $resultado["nombre"] . "<br>";
		echo "<b> Descripcion: </b>" . $resultado["descripcion"] . "<br>";
		echo "<b> Precio: </b>" . $resultado["precio"] . "<br>";
	?>
	<br>Deseas eliminar el elemento?<br>

	<a href="borrar.php?id=<?php echo $id ?>"><img src="si4.png" width="35" height="30"></a>
	<a href="index.php"><img src="NO.jpg" width="35" height="30"></a>
</html>