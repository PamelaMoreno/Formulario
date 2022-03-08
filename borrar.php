<?php

include 'conexion.php';

$id = $_POST['id'];
$query = "DELETE FROM usuarios WHERE id=$id";
$resultado = pg_query($con,$query);

if($resultado){
	echo "El registro se eliminó";
	echo "<br/ >";
	echo "<a href='consulta.php'>Regresar a la lista de usuarios</a>";
}else{
	echo "Hubo un problema al eliminar";
}

?>
