<?php 

include("db_con.php");

if (isset($_POST['enviar'])) {
     
	    $nombre = trim($_POST['nombre']);
	    $telefono= trim($_POST['telefono']);
		$correo= trim($_POST['correo']);
	   
	    $consulta = "INSERT INTO datos(nombre, telefono,correo ) VALUES ('$nombre','$telefono','$correo')";
	    $resultado = mysqli_query($conex,$consulta);
	   
    
}

?>