<?php
//consultar los registros y mostrarlos en una tabla.

include 'conexion.php';
$query = "Select id,nombre,apaterno,amaterno,correo from usuarios";
$ejecucion = pg_query($con,$query);
//var_dump($ejecucion);

?>

<table>
 <tr>
  <th>Id</th>
  <th>Nombre</th>
  <th>Apellido paterno</th>
  <th>Apellido materno</th>
  <th>Correo electrónico</th>
  <th>Edición</th>
  <th>Borrar</th> 
 </tr>
<?php
while ($row = pg_fetch_assoc($ejecucion)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";	
	echo "<td>".$row['nombre']."</td>";	
	echo "<td>".$row['apaterno']."</td>";
	echo "<td>".$row['amaterno']."</td>";
	echo "<td>".$row['correo']."</td>";
	echo "<td><a href='formulario2.php?id=".$row['id']."'>Editar</a></td>";
	echo "<td><a href='formulario3.php?id=".$row['id']."'>Borrar</a></td>";
	echo "</tr>";
}
?>
</table>
