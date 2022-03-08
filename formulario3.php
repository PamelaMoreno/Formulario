<?php
	include 'conexion.php';
	$id = $_GET['id'];
	//var_dump($id);
	$query = "select nombre,apaterno,amaterno,correo from usuarios where id=".$id;
	$ejecucion = pg_query($con,$query);
	$resultado = pg_fetch_assoc($ejecucion);
	//var_dump($resultado);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"
	</head>
	<body>
		<p>El siguiente registro será eliminado:  </p>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Apellido paterno</th>
				<th>Apellido materno</th>
				<th>Correo electronico</th>
			</tr>
			<tr>
				<td><?= $resultado['nombre'];?></td>
				<td><?= $resultado['apaterno'];?></td>
				<td><?= $resultado['amaterno'];?></td>
				<td><?= $resultado['correo'];?></td>
			</tr>
 		</table>
		<form name="eliminar" action="borrar.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" value="Eliminar">
		</form>
	</body>
</html>
