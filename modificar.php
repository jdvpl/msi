<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
  <style type="text/css">
    body{
      background: url('img/1234.jpg');background-position: center;background-attachment: fixed;background-size: 100%;
    }
   section{
          background-color: #0A0909;color: white;
        }
    h2{
      color: blue;
    }
.contactenos .form-control{
  background: transparent;
  border: none;
  border-bottom: 2px solid rgba(255, 255, 255,.3);
  height: 50px;
  border-radius: 0;
  background: rgba(0, 0, 0, .6);
  color: #fff;
  font-size: 1.25rem;
}
.contactenos .form-control:hover,
.contactenos .form-control:focus{
  border: none;
  border-bottom: 2px solid rgba(255, 255, 255,1);
  box-shadow: none;
}
.contactenos .textarea{
  min-height: 100px;
}
.contactenos label{
  color: white;
  font-size: 1.25rem;
  text-align: center
}
.contactenos form{
  position: relative;
  z-index: 1000;

}
  </style>
	<meta charset="UTF-8">
	<title>guardar </title>
</head>
<body>
	<center>
		<?php 
					$id=$_REQUEST['id'];

					include("conexion.php");

						$query="SELECT * FROM usuarios where id='$id'";
						$resultado=$conexion->query($query);
						$row=$resultado->fetch_assoc();
					?>	
			<section class="contactenos container p-2">
        
      
			<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
							<h2>modificar</h2>
                          <div class="form-group">
                          <label for="">nombre</label>
                          <input type="text" required name="nombre" placeholder="nombre..." value="<?php echo $row['nombre']; ?>" class="form-control">
                        </div>
                          <div class="form-group">
                          <label for="">email</label>
                          <input type="text" required name="email" placeholder="correo..." value="<?php echo $row['email']; ?>" class="form-control">
                        </div>
                          <div class="form-group">
                          <label for="">telefono</label>
                          <input type="text" required name="telefono" placeholder="telefono..." value="<?php echo $row['telefono']; ?>" class="form-control">
                        </div>
                         <div class="form-group">
                          <label for="">ciudad</label>
                          <input type="text" required name="ciudad" placeholder="ciudad..." value="<?php echo $row['ciudad']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">mensaje</label>
                          <textarea name="mensaje" class="textarea form-control" placeholder="mensaje" required value=""><?php echo $row['mensaje']; ?></textarea>
                        </div>
                        <div class="form-group text-center">
                          <input type="submit" value="aceptar" id="boton" class="btn btn-outline-primary" />
                        </div>
                       </form>
                   </center>
                   </section>
</body>
</html>