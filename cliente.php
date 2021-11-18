<?php 

include("con_db.php");

if (isset($_POST['cliente'])) {
    if (strlen($_POST['nombre']) >= 1 
		&& strlen($_POST['correo']) >= 1 
		&& strlen($_POST['fecha_nac']) >= 1) {
	    	$nombre = trim($_POST['nombre']);
	    		$email = trim($_POST['correo']);
				$fecha_nac = trim($_POST['fecha_nac']);
				$fechareg = date("d/m/y");
	    	$consulta = "INSERT INTO cliente(nombre, email, fecha_nac, fecha_reg) VALUES ('$nombre','$email','$fecha_nac','$fechareg')";
			
			
			$resultado = mysqli_query($conex,$consulta);
	    	if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has hecho cliente premium correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>