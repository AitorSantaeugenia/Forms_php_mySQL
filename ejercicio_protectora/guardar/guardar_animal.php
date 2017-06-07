	<?php
	include("../objetos/objeto_animal.php");
		
	$miAnimal = new Animal(); 

	$miAnimal->setEspecie($_POST["especie"]);
	$miAnimal->setRaza($_POST["raza"]);
	$miAnimal->setPeso($_POST["peso"]);
	$miAnimal->setEdad($_POST["edad"]);
	$miAnimal->setAltura($_POST["altura"]);
	$miAnimal->setTipocomida($_POST["tipo_comida"]);
	$miAnimal->setColor($_POST["color"]);
	$miAnimal->setImagen($_POST["imagen"]);	
	?>
	
	<?php
	//------------------------------------------------------------
	
	include("../conexio/conexion_php.php");

	
	//UPDATE clientes SET direccion = pie2, direccion = 'pie2' WHERE id = 1;
	//DELETE FROM clientes WHERE id = 4

	//echo "puertas".$miCoche->getNumPuertas();
	
	$sql = "INSERT INTO animales (especie, raza, peso, edad, altura, tipo_comida, color, imagen)
	VALUES ('".$miAnimal->getEspecie()."', '".$miAnimal->getRaza()."', '".$miAnimal->getPeso()."', '".$miAnimal->getEdad()."','".$miAnimal->getAltura()."','".$miAnimal->getTipocomida()."','".$miAnimal->getColor()."','".$miAnimal->getImagen()."')";
	
	
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

<form method="post" action="../admin/listado_animales.php" style="font-family: monospace; text-align:center;">
			<?php
					echo "<input type='submit' name='volver' style='font-family: monospace; text-align:center;' value='Ver lista animales'><br/><br/>"; 
			?>
</form>