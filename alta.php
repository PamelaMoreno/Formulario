<?php
//Recibir datos del formulario y asignarlos a variables. Después imprimirlas.
//var_dump($_GET); ca,biar a post

include 'conexion.php';

//$nombre = $_POST["nombre"];
$nombre = strip_tags($_POST1["nombre"]); //saneamiento de datos
$apaterno = strip_tags($_POST["apaterno"]);
$amaterno = strip_tags($_POST["amaterno"]);
$email = strip_tags($_POST["correo"]);

//validar

if(preg_match('[a-z áéíóúüñ]{2,50}/ig',$nombre)){
	echo "Es un nombre válido";
}else{
	echo "no es un nombre válido";
	//header('Location: formulario.php?error=1');
}

if (filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "es un correo válido";
}else{
	echo "no es un correo válidp";
	header('Location: formulario.php?error=1');
}

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
