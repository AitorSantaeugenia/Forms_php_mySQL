<?php
	include("../objetos/objeto_propietario.php");
	include("../conexio/conexion_php.php");
	
	$miPropietario = new Propietario(); 

	$miPropietario->setNombre($_POST["nombre"]);
	$miPropietario->setApellido($_POST["apellidos"]);
	$miPropietario->setdni($_POST["dni"]);
	$miPropietario->setEmail($_POST["email"]);
	$miPropietario->setTelefono($_POST["telefono"]);
	$miPropietario->setDireccio($_POST["direccio"]);
	
	$sql="UPDATE propietarios SET nombre='".$miPropietario->getNombre()."', apellidos='".$miPropietario->getApellido()."',dni='".$miPropietario->getDni()."',email='".$miPropietario->getEmail()."',telefono='".$miPropietario->getTelefono()."',direccio='".$miPropietario->getDireccio()."'  WHERE id = ".$_GET["id"];
	//$sql="UPDATE coches SET marca='".$miCoche->getNumMarca()."', model='".$miCoche->getNumModel()."',numPuerta='".$miCoche->getNumPuertas()."', numPlaca='".$miCoche->getNumPlaca()."', automatica='".$miCoche->getNumAutomatica()."', tipoTerreno='".$miCoche->getTerreno()."', descapotable='".$miCoche->getisdescapotable()."', potencia='".$miCoche->getNumPotencia()."' WHERE id = ".$_GET["id"];
	echo $sql;

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Update incorrecta: ' . mysqli_error());
	}else{
		echo "Update cliente con id.".$_GET["id"];
	}
	
	mysqli_close($conn);
?>

<form method="post" action="../admin/listado_propietarios.php">
<br/>
						<input type="submit" name="Volver" value="Volver"><br/><br/> 
</form>