<?php
require_once("funciones.php");

	$id = $_GET["id"];
	$obj = new funciones();
	$resultado = $obj->buscarProducto($id);
?>
<!DOCTYPE HTML>
<html>
	<FIELDSET><legend>Editar producto</legend>
		<form method="POST" action="AccionEditar.php" >
			<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			Clave<br>
			<input type="text" name="clave" size="10" value="<?php echo $resultado["clave"]; ?>"><br>

			Nombre<br>
			<input type="text" name="nombre" size="10" value="<?php echo $resultado["nombre"]; ?>"><br>

			Descripci&oacute;n<br>
			<input type="text" name="descripcion" size="10" value = "<?php  echo $resultado["descripcion"];?>"><br>

			Precio<br>
			<input type="text" name="precio" size="10" value = "<?php echo $resultado["precio"]; ?>"><br><br>
			<input type="submit" value="Guardar cambios">
		</form>

	</FIELDSET>
</html>