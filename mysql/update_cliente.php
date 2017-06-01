<?php
	include("conexion_php.php");
	include("clientes.php");
	
	$miCliente = new Cliente(); 

	$miCliente->setNombre($_POST["nombre"]);
	$miCliente->setApellido($_POST["apellidos"]);
	$miCliente->setdni($_POST["dni"]);
	
	$sql="UPDATE clientes SET nombre='".$miCliente->getNombre()."', apellido='".$miCliente->getApellido()."',dni='".$miCliente->getdni()."'  WHERE id = ".$_GET["id"];
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

<form method="post" action="lista_clientes.php">
						<input type="submit" name="Volver" value="Volver"><br/><br/> 
</form>