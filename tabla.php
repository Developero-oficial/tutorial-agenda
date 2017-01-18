 <table>
 <th>Nombre</th>
 <th>Domicilio</th>
 <th>Teléfono</th>
 <th>Comentarios</th>
 <th>Editar</th>
 <th>Eliminar</th>

<?php 

$agenda = Agenda::ningunDato();

$datos = $agenda->select();

while ($row = $datos->fetch_array()) {
	
	echo '<tr>';
	echo '<td>',$row['nombre'] ,'</td>';
	echo '<td>',$row['domicilio'] ,'</td>';
	echo '<td>',$row['telefono'] ,'</td>';
	echo '<td>',$row['comentarios'] ,'</td>';
	echo "<td> <a href=\"index.php?accion=editar&&id=$row[id]\">Editar</a> </td>";
	echo "<td> <a href=\"index.php?accion=eliminar&&id=$row[id]\">Eliminar</a> </td>";

	echo '</tr>';
}


 ?>

</table>