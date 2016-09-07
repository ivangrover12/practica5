<?php 
	if(isset($_POST["nombre"])) $bandera = true;
 ?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Salida</h1>
<form action="" method="post">
	<label>Nombre</label>
	<input type="text" name="nombre" value="">
	<br>
	<br>
	<label>Apellidos</label>
	<input type="text" name="apellido" value="">
	<br>
	<br>
	<label>Correo</label>
	<input type="text" name="correo" value="">
	<br>
	<br>
	<label>Comentarios</label>
	<input type="text" name="comentario" value="" size="80" maxlength="79">
	<br>
	<br>
	<input type="submit" value="Enviar">
	</form>
	<?php 
		if ($bandera) 
	{echo "<h1>".$_POST["nombre"]." ".$_POST["apellido"]." ".$_POST["correo"]." ".$_POST["comentario"]."</h1>";
	}
	 ?>
</body>
</html>