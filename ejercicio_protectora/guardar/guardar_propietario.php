	<?php
	include("../objetos/objeto_propietario.php");
		
	$miPropietario = new Propietario(); 

	$miPropietario->setNombre($_POST["nombre"]);
	$miPropietario->setApellido($_POST["apellidos"]);
	$miPropietario->setDni($_POST["dni"]);
	$miPropietario->setEmail($_POST["email"]);
	$miPropietario->setTelefono($_POST["telefono"]);
	$miPropietario->setDireccio($_POST["direccio"]);
	?>
	
	<?php
	//------------------------------------------------------------
	
	include("../conexio/conexion_php.php");
	
	$sql = "INSERT INTO propietarios (nombre, apellidos, dni, email, telefono, direccio)
	VALUES ('".$miPropietario->getNombre()."', '".$miPropietario->getApellido()."', '".$miPropietario->getDni()."', '".$miPropietario->getEmail()."','".$miPropietario->getTelefono()."','".$miPropietario->getDireccio()."')";
	
	
	if (mysqli_query($conn, $sql)){
		echo "Inserción correcta";
	} else {
		echo "Error: " . mysqli_error($conn);
	}
	
	//----------------------------------------------------------------------
		//----------------------------------------------------------------------

	mysqli_close($conn);
?> 
<br/>

<form method="post" action="../index2.php" style="font-family: monospace; text-align:center;">
			<?php
					echo "<input type='submit' name='volver' style='font-family: monospace; text-align:center;' value='Volver al índice'><br/><br/>"; 
			?>
</form>