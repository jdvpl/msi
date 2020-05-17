<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/tabla.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>tabla</title>
	<style type="text/css">
		body{
			background-image: url('imagenes/t2.jpg');background-position: center; background-size: 100%;background-attachment: fixed;
		}
		table{
			background: #68D36D;
		}
		tbody{
			color: #160B0B;font-weight: 600;
		}
		.dios{
			color: #0B0339;font-weight: 800; font-size: 20px;
		}
		a{
			color: #C12222; font-weight: 600; font-size: 20px; 
		}
	</style>
</head>
<body>
	<center>
		<table border="5" class="table-hover table table-responsive table-bordered">
			<thead class="dios">
				<tr>
				<th colspan="1" scope="col"><a href="index.php" scope="col">inicio</a></th>
				<th colspan="10" class="text-center">lista de usuarios</th>	
				</tr>
				
			</thead>
			<tbody>
				<tr class=" dios">
					<td class="text-uppercase" ><center>id</center></td>
					<td class="text-uppercase"><center>nombre</center></td>
					<td class="text-uppercase"><center>correo</center></td>
					<td class="text-uppercase"><center>telefono</center></td>
					<td class="text-uppercase"><center>ciudad</center></td>
					<td class="text-uppercase" colspan="4"><center>mensaje</center></td>
					<td class="text-uppercase" colspan="2"><center>operaciones</center></td>
					
				</tr>
				<?php 
					include("conexion.php");

						$query="SELECT * FROM usuarios";
						$resultado=$conexion->query($query);
						while ($row=$resultado->fetch_assoc()) {
					?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['telefono']; ?></td>
							<td><?php echo $row['ciudad']; ?></td>
							<td colspan="4"><?php echo $row['mensaje']; ?></td>
							<td><a href="modificar.php?id=<?php echo $row['id']; ?>">modificar</a></td>
							<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">eliminar</a></td>
							
						</tr>
					<?php
					 }
					 ?>
						
				 
			</tbody>
		</table>
	</center>
	
</body>
</html>