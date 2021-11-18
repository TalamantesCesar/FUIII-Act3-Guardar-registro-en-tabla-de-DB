<!DOCTYPE html>
<html>
<head>
	<title>Nuevo cliente Hagalo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Se nuevo cliente premium!</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
    	<input type="email" name="correo" placeholder="Email">
		<input type="date" name="fecha_nac" placeholder="Fecha de nacimiento">
    	<input type="submit" name="cliente">
    </form>
        <?php 
        include("cliente.php");
        ?>
</body>
</html>