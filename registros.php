<?php 

include("db_con.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['telefono']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $tel = trim($_POST['telefono']);
	    
	    $consulta = "INSERT INTO datos(id,nombre, telefono) VALUES ('$name','$tel')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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