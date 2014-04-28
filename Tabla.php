<?php
class Tabla
{
    public $producto;

    public function creaTabla()
    {
        echo "<a href='/Catalago/nuevo.php'>Agregar producto </a>";
        echo '<table border="1">';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Clave</th>';
                echo '<th>Nombre</th>';
                echo '<th>Descripcion</th>';
                echo '<th>Opciones</th>';
            echo '</tr>';
            foreach($this->producto as $prod){
                echo '<tr>';
                    echo '<td>'.$prod['id']. '</td>';
                    echo '<td>'.$prod['clave'].'</td>';
                    echo '<td>'.$prod['nombre'].'</td>';
                    echo '<td>'.$prod['descripcion'].'</td>';
                    echo '<td>';
                        echo '<a href = "editar.php?id='. $prod['id'] .'">';
                        echo '<img src="editar.png" width="25" height=20>';
                        echo '</a>'; 

                        echo '<a href = "VentanaBorrar.php?id=' . $prod['id'] .'">';
                        echo '<img src="Borrar.png" width="25" height=20>';
                        echo '</a>';

                        echo '<a href = "VentanaVer.php?id=' . $prod['id'] .'">';
                        echo '<img src="ver.png" width="25" height=20>';
                        echo '</a>';


                    echo '</td>';
                echo '</tr>';
            }
        echo "</table>";
    }
}

?>