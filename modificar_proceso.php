<?php 
	
	include("conexion.php");
		$id=$_REQUEST['id'];
		$nombre= $_POST['nombre'];
		$correo= $_POST['email'];
		$telefono= $_POST['telefono'];
		$ciudad=$_POST['ciudad'];
		$mensaje=$_POST['mensaje'];


 	$query="UPDATE usuarios SET nombre='$nombre',email='$correo', telefono='$telefono', ciudad='$ciudad', mensaje='$mensaje' WHERE id='$id' ";
 	$resultado=$conexion->query($query);

 	if ($resultado) {
 		header("location: index.php");
 	}
 	else{
 		echo "insercion no exitosa";
 	}
 ?>