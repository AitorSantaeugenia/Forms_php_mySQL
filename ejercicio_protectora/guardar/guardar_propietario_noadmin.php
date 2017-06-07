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
	include("../session/session_idioma.php");
	
	$sql = "INSERT INTO propietarios (nombre, apellidos, dni, email, telefono, direccio)
	VALUES ('".$miPropietario->getNombre()."', '".$miPropietario->getApellido()."', '".$miPropietario->getDni()."', '".$miPropietario->getEmail()."','".$miPropietario->getTelefono()."','".$miPropietario->getDireccio()."')";
	
	
	if (mysqli_query($conn, $sql)){
		echo INSERC;
		$lastID = mysqli_insert_id($conn);
		//printf ("Nuevo registro con el id %d.\n", mysqli_insert_id($conn));
		//echo $lastID;
	} else {
		echo "<br/>";
		echo "Error: " . mysqli_error($conn);
		echo "<br/>";
	}
	//print_r($_SESSION);
	$sql2 = "UPDATE animales SET id_propietario='".$lastID."' WHERE id=".$_SESSION["id_perro"];
	
	if (mysqli_query($conn, $sql2)){
		echo "<br/>";
		echo MSGINSER;
		echo "<br/>";
	} else {
		echo "<br/>";
		echo "Error: " . mysqli_error($conn);
		echo "<br/>";
	}
	//--------------------------------------------------------------------------------------------------
	//COMPROVACIO SI EXISTEIX AMB DNI I CORREU 
	//--------------------------------------------------------------------------------------------------
		//print_r($_SESSION);
	$sql3 = "SELECT * FROM PROPIETARIOS WHERE dni='".$lastID."' AND email='".$lastID."'";
	
	if (mysqli_query($conn, $sql2)){
		echo "<br/>";
		echo INSERC;
		echo "<br/>";
	} else {
		echo "<br/>";
		echo "Error: " . mysqli_error($conn);
		echo "<br/>";
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