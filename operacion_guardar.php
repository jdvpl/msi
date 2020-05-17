<?php 
	
	include("conexion.php");

		$nombre= $_POST['nombre'];
		$correo= $_POST['email'];
		$telefono= $_POST['telefono'];
		$ciudad=$_POST['ciudad'];
		$mensaje=$_POST['mensaje'];

 	$query="INSERT INTO usuarios(nombre,email,telefono,ciudad,mensaje) VALUES('$nombre','$correo','$telefono','$ciudad','$mensaje')";
 	$resultado=$conexion->query($query);

 	if ($resultado) {
 		header("location: index.php");
 	}
 	else{
 		echo "insercion no exitosa";
 	}
 ?>