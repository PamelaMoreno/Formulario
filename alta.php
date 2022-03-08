<?php
//Recibir datos del formulario y asignarlos a variables. Después imprimirlas.
//var_dump($_GET); ca,biar a post

include 'conexion.php';

$nombre = $_POST["nombre"];
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$email = $_POST["correo"];

$insercion = "insert into usuarios (nombre,apaterno,amaterno,correo) values ('$nombre','$apaterno','$amaterno','$email')";
$query = pg_query($con,$insercion);
//var_dump($query);

if($query){
	echo "se guardó el registro en la base de datos";
	echo "<br />";
	echo "<a href='formulario.html'>Regresar al formulario</a>";
} else {
	echo "hubo un error";
}
pg_close($con);
/*echo"Hola ".nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo es: ".$email;*/

?>
