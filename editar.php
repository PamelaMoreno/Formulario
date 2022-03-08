<?php

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$email = $_POST['correo'];
$query = "UPDATE usuarios SET nombre='$nombre',apaterno='$apaterno',amaterno='$amaterno',correo='$email' WHERE id=$id";
$resultado = pg_query($con,$query);

if($resultado){
	echo "El registro se actualizó";
	echo "<br/ >";
	echo "<a href='consulta.php'>Regresar a la lista de usuarios</a>";
}else{
	echo "Hubo un problema al actualizar";
}
?>
