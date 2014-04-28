<?php
require_once("conexion.php");

class funciones{

	public $clave;
	public $nombre;
	public $descripcion;
	public $precio;

	public function obtenerTodos(){
		try
        {
            $arreglo = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM productos";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $arreglo[] = $row;
                     }
                }
            }
            $conexion->cerrar();
            return $arreglo;
        }
        catch(Exception $e)
        {
            return array();
        } 
	}

	public function guardar(){

	try{
			$conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }

            $sql="INSERT INTO `productos` ".
            "(clave, nombre, descripcion, precio)".
            "VALUES".
            "('" . $this->clave . "', '" . $this->nombre . "', '" . $this->descripcion . "', " . $this->precio . ");";

            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar(); 
            header("Location: /Catalago");

		}catch(Exception $e){
			return false;
		}
	} 

	public function editar($id){

	try{
			$conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }

            $sql="UPDATE `productos` SET clave = '" . $this->clave . "', nombre = '" . $this->nombre . "', " .
            "descripcion = '" . $this->descripcion . "', precio = '" . $this->descripcion . "' WHERE id = " . $id . ";";

            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar(); 
            header("Location: /Catalago");

		}catch(Exception $e){
			return false;
		}
	}

    public function borrar($id1){

        try{
                $conexion = new Conexion();
                if(!$conexion->conectar()){
                    throw new Exception($conexion->getError());
                }
                $sql = "DELETE FROM productos WHERE id = " . $id1 . ";";

                $resultado = $conexion->mysqli->query($sql);
                $conexion->cerrar();
                header("Location: /Catalago");


        }catch(Exception $e){
            return false;
        }

    }

	public function buscarProducto($indice){
			
			$arreglo=array();
		try{
			
			$conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }

            $sql="SELECT * FROM productos WHERE id='".$indice."';";

            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $arreglo = $row;
                     }
                }
            }

            $conexion->cerrar(); 
            return $arreglo;

		}catch(Exception $e){
			return array();
		}
	}
}
?>