<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/tabla.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>tabla</title>
	<style type="text/css">
		ody{
			background-image: url('imagenes/t2.jpg');background-position: center; background-size: 100%;background-attachment: fixed;
		}
	</style>
</head>
<body>
	<div class="persona">nombre</div>
				<?php 
					include("conexion.php");

						$query="SELECT * FROM usuarios";
						$resultado=$conexion->query($query);
						while ($row=$resultado->fetch_assoc()) {
					?>
	
							<div class="persona"><?php echo $row['nombre']; ?></div>
							<div class="informe"><?php echo $row['mensaje']; ?></div>
							<a href="modificar.php?id=<?php echo $row['id']; ?>">modificar</a>
							<a href="eliminar.php?id=<?php echo $row['id']; ?>">eliminar</a>
					<?php
					 }
					 ?>
						
</body>
</html>