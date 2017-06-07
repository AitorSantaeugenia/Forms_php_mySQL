<?php
	include("../objetos/objeto_animal.php");
	include("../conexio/conexion_php.php");
		
	$miAnimal = new Animal(); 

	$miAnimal->setEspecie($_POST["especie"]);
	$miAnimal->setRaza($_POST["raza"]);
	$miAnimal->setPeso($_POST["peso"]);
	$miAnimal->setEdad($_POST["edad"]);
	$miAnimal->setAltura($_POST["altura"]);
	$miAnimal->setTipocomida($_POST["tipo_comida"]);
	$miAnimal->setColor($_POST["color"]);
	$miAnimal->setImagen($_POST["imagen"]);		
	
	
	//$sql="UPDATE coches SET marca='".$_POST["marca"]."',model='".$_POST["model"]."',numPuerta='".$_POST["nportes"]."',numPlaca='".$_POST["nplaca"]."',automatica='".$_POST["automat"]."',tipoTerreno='".$_POST["tterreno"]."',descapotable='".$_POST["capota"]."',potencia='".$_POST["potencia"]."'	WHERE id = ".$_GET["id"];
	$sql="UPDATE animales SET especie='".$miAnimal->getEspecie()."', raza='".$miAnimal->getRaza()."',peso='".$miAnimal->getPeso()."', edad='".$miAnimal->getEdad()."', altura='".$miAnimal->getAltura()."', tipo_comida='".$miAnimal->getTipocomida()."', color='".$miAnimal->getColor()."', imagen='".$miAnimal->getImagen()."' WHERE id = ".$_GET["id"];
	//echo $sql;
	print_r($_POST);

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Update incorrecta: ' . mysqli_error());
	}else{
		echo "<br/><br/>Update del animal con id.".$_GET["id"];
		echo "<br/>";
		echo "<br/>";
	}
	
	mysqli_close($conn);
?>

<form method="post" action="../admin/listado_animales.php">
						<input type="submit" name="Volver" value="Volver"><br/><br/> 
</form>